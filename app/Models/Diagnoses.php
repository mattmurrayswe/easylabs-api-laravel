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

}
