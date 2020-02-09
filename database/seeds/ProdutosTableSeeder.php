<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;
use App\Models\Categoria;


class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        Produto::create([
            'nome'         => 'vestido de seda preto',
            'categoria_id' => 2,
            'preco' 	   => 250.00,
            'estoque'      => 'sim'

        ]);

        Produto::create([
            'nome'         => 'calça de moleton cinza',
            'categoria_id' => 1,
            'preco' 	   => 150.00,
            'estoque'      => 'sim'

        ]);

        Produto::create([
            'nome'         => 'maiô preto com drapeado',
            'categoria_id' => 4,
            'preco' 	   => 59.00,
            'estoque'      => 'nao'

        ]);

        Produto::create([
            'nome'         => 'sapatilha azul escuro com detalhe no salto',
            'categoria_id' => 8,
            'preco' 	   => 75.00,
            'estoque'      => 'sim'

        ]);

        Produto::create([
            'nome'         => 'blusa caramelo com botões decorativos',
            'categoria_id' => 2,
            'preco' 	   => 450.00,
            'estoque'      => 'sim'

        ]);
    }
}
