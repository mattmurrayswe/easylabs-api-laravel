<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosesHasSuggestedMedicines extends Model
{

    protected $table = "diagnoses_has_suggested_medicines";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'diagnose_id',
        'medicine_id'
    ];

    public function symptom()
    {
        return $this->belongsTo(Medicine::class, "medicine_id", "id");
    }
}
