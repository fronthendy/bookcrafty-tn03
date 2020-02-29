<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produto";
    protected $primakyKey = "id_produto";
    public $timestamps = false;
}
