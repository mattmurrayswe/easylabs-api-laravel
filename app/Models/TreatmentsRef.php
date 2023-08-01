<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentsRef extends Model
{

    protected $table = "treatments_ref";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'prescriber_id',
        'diagnoses_id',
        'created_by'
    ];

    public function treatmentsRef()
    {
        return $this->hasMany(TreatmentHasMedicines::class, 'treatment_id', 'id');
    }

    public function diagnose()
    {
        return $this->hasOne(Diagnoses::class, 'id', 'diagnoses_id');
    }
}
