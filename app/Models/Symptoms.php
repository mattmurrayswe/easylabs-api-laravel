<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptoms extends Model
{

    protected $table = "symptoms";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];
}

