<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Actividad extends Model
{
    use HasFactory;
    protected $table ='actividads';
    protected $guarded=['id','created_at','updated_at'];
    //protected $fillable=[atributos que voy a cambiar];
    

}
