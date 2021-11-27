<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipotransporte extends Model
{
    use HasFactory;
    protected $table="tipotransportes";
    protected $guarded=['id','created_at','upadate_at'];
}
