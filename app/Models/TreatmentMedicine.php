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
        'medicine_id',
        'description'
    ];

    

}

