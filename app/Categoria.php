<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{

    //protected $primaryKey = 'flight_id';
     protected $table = 'categoria';
     protected $fillable = ['nombre','descripcion','condicion'];
}
