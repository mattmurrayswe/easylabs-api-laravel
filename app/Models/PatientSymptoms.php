<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientSymptoms extends Model
{

    protected $table = "patient_inform_symptoms";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'created_at',
        'patient_id',
        'symptom_id',
        'diagnoses_id',
        'symptom_scale',
        'description',
    ];

    /**
     * Define a relationship with the Symptoms model.
     */
    public function symptom()
    {
        return $this->belongsTo(Symptoms::class, 'symptom_id');
    }
}

