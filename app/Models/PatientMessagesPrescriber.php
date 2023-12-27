<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientMessagesPrescriber extends Model
{

    protected $table = 'patient_messages_presc';
    
    protected $fillable = [
        'patient_id',
        'message',
        'prescriber_id',
        'sentby',
        'status'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }
}
