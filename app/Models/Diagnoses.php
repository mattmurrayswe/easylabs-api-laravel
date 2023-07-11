<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnoses extends Model
{

    protected $table = "diagnoses";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    public function hasSymptoms()
    {
        return $this->hasMany(DiagnosesHasSymptoms::class, "diagnose_id", "id");
    }

    public function hasSuggestedMedicines()
    {
        return $this->hasMany(DiagnosesHasSuggestedMedicines::class, "diagnose_id", "id");
    }

}
