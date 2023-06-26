<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesToPrescriber extends Model
{

    protected $table = 'messages_to_prescriber';

    
    protected $fillable = [
        'patient_id',
        'message'
    ];

}
