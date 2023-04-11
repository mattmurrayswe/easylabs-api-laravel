<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    protected $table = "pacients_uses_medicines";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pacient_id',
        'medicine_id',
        'description'
    ];

}
