<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDays extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function horariosDisponiveis()
    {
        return $this->hasMany(Availability::class, 'day_id');
    }

}
