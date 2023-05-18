<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{

    protected $fillable = [
        'patient_id',
        'prescriber_id',
        'description',
        'appointment_date',
        'appointment_time',
        'type'
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    } 

    public function prescritor()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }
    

}

