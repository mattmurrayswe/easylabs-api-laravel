<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatments extends Model
{

    protected $table = "treatments";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'patient_id',
        'prescriber_id',
        'diagnoses_id'
    ];

}
