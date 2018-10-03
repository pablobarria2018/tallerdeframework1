<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    protected $table='nombreTabla';
    protected $filiable=['name_company','contact','comments','phone'];
}
