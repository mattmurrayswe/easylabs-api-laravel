<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClinicAdress extends Model
{
    public $table = 'clinic_address';
    public $timestamps = false;

    
    protected $fillable = [
        'cep',
        'street',
        'number',
        'complement',
        'neighboor',
        'city',
        'state',
    ];


}

