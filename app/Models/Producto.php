<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';

    protected $primarykey='id_pro';
 
    public $timestamps=false;
}
