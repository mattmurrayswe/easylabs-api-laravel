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
        'treatment_id',
        'howMany',
        'created_at'
    ];

    /**
     * Define a relationship with the Symptoms model.
     */
    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }

    public function treatmentHasMedicines()
    {
        return $this->belongsTo(TreatmentHasMedicines::class, 'treatment_id', 'treatment_id');
    }
}

