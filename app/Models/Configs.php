<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    protected $table = 'configs';

    protected $fillable = [
        'patient_id',
        'prescriber_id',
        'push_enabled',
        'email_enabled',
    ];

    // Define relationships if needed
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }
}
