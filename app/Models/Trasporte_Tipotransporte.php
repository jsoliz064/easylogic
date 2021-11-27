<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trasporte_Tipotransporte extends Model
{
    use HasFactory;
    protected $table="transporte_tipotransportes";
    protected $guarded=['id','created_at','upadate_at'];
}
