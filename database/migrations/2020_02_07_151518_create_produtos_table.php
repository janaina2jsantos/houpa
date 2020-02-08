<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned()->nullable(); //fk 
            $table->string('nome');
            $table->decimal('preco', 8, 2);
            $table->string('estoque', 3);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('produtos');
        Schema::enableForeignKeyConstraints();

    }
}
