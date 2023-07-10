<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosesHasSymptoms extends Model
{

    protected $table = "diagnoses_has_symptoms";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'diagnose_id',
        'symptom_id'
    ];

    public function symptom()
    {
        return $this->belongsTo(Symptoms::class, "symptom_id", "id");
    }
}
