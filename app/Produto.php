<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    protected $primaryKey = "id_produto";
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'fk_categoria');
    }

    public function editora()
    {
        return $this->belongsTo(Editora::class, 'fk_editora');
    }
}
