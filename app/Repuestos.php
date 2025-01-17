<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repuestos extends Model
{
    protected $table = 'repuestos';
    protected $primaryKey = 'Referencia'; 
    public $timestamps = false;
}
