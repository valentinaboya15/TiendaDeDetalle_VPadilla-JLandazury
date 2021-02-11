<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey ='id_usu';
    public $timestamps =false;
}
