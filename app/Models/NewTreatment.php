<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewTreatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'name_diagnosis',
        'name_medicine',
        'name_treatment',
        'how_many',
        'frequency',
        'presentation',
        'start_treatment_date',
        'end_treatment_date',
        'use_time',
        'posology',
        'packing_quantity',
        'permanent'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    protected $casts = [
        'start_treatment_date'  => 'date:Y-m-d',
        'end_treatment_date'  => 'date:Y-m-d',
    ];

}
