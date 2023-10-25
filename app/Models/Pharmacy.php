<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public $table = 'clinics';
    
    protected $fillable = [
        "cep",
        "street",
        "number",
        "complement",
        "neighboor",
        "city",
        "state",
        "unidade",
        "name",
        "rede",
        "email",
        "foto"
    ];
}

