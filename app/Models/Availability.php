<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'availability';
    protected $fillable = ['prescriber_id', 'day_id', 'start_time', 'end_time', 'period_id'];


    public function diaSemana()
    {
        return $this->belongsTo(WeekDays::class, 'day_id');
    }

    public function period()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }

    public function prescritor()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }
}
