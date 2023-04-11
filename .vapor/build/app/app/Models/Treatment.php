<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'timer_per_day',
        'duration',
        'how_many',
        'frequency',
    ];

    public function medicines()
    {
        return $this->belongsToMany(Medicine::class);
    }
}
