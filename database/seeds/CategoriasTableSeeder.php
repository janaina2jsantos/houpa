<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;


class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        Categoria::create([
            'nome' => 'moda masculina'

        ]);

        Categoria::create([
            'nome' => 'moda feminina'
        ]);

        Categoria::create([
            'nome' => 'moda infanto-juvenil'
        ]);

        Categoria::create([
            'nome' => 'moda praia'
        ]);

        Categoria::create([
            'nome' => 'plus size'
        ]);

        Categoria::create([
            'nome' => 'lingerie'
        ]);

        Categoria::create([
            'nome' => 'calçado masculino'
        ]);

        Categoria::create([
            'nome' => 'calçado feminino'
        ]);

        Categoria::create([
            'nome' => 'acessórios'
        ]);
    }
}
