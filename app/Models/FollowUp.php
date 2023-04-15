<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FollowUp extends Model
{

    protected $table = 'follow_up';

    
    protected $fillable = [
        'are_you_following',
        'positive_results',
        'how_are_you_feeling',
        'patient_id',
        'send_to_doctor',
    ];

    
}
