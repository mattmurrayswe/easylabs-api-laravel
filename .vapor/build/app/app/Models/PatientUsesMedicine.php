<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientUsesMedicine extends Model
{

    protected $table = "patients_uses_medicines";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'medicine_id',
        'description',
        'howMany',
    ];

    

}

