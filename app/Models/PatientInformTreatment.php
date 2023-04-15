<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInformTreatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'treatment_id',
        'how_many',
        'use_date',
        'use_time',
        'patient_id'
    ];
}
