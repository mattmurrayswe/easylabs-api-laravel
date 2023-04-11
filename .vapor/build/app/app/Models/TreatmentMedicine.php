<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentMedicine extends Model
{

    protected $table = "treatments_has_medicines";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'treatment_id',
        'medicines_id',
        'description'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'medicines_id');
    }

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatment_id');
    }
}

