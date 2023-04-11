<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientTreatment extends Model
{

    protected $table = "pacients_has_treatments";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'treatment_id',
        'patient_id',
        'description',
        'start_treatment_date',
        'end_treatment_date'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id');
    }

    protected $casts = [
        'start_treatment_date' => 'datetime:Y-m-d H:00',
        'end_treatment_date' => 'datetime:Y-m-d H:00',
    ];
}

