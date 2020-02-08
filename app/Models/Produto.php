<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
    
    protected $fillable = [
        'nome', 'categoria_id', 'preco', 'estoque'
    ];


    // Relation
    public function categoria() {

        return $this->belongsTo('App\Models\Categoria');
    }
}
