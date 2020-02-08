<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Session;



class ProdutoController extends Controller
{
   
    public function index() {
        
        $produtos = Produto::orderBy('id', 'desc')->with('categoria')->get();

        // dd($produtos);

        return view('produtos.lista', compact('produtos'));
    }

    
    public function create() {

        $categorias = Categoria::all();
        
        return view('produtos.novo', compact('categorias'));

    }

    
    public function store(Request $request) {
        

        $validator = $this->validate($request, [
            'nome'       => 'required|min:5',
            'categoria'  => 'required',
            'preco'      => 'required',
            'estoque'    => 'required'   

        ]);

        try{
            $produto = Produto::create([
                'nome'         => $request->get('nome'),
                'categoria_id' => $request->get('categoria'),
                'preco'        => $request->get('preco'),
                'estoque'      => $request->get('estoque')
                
            ]);

            # status de retorno
            Session::flash('success', ' O produto foi cadastrado com sucesso!');
            return redirect()->route('produtos.index');

        }catch (\Exception $exception) {

            # status de retorno
            Session::flash('error', ' O produto não pôde ser cadastrado!');
            return redirect()->back()->withInput();
        }

        return redirect()->route('produtos.index');


    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
