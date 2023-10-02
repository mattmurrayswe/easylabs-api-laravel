<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriberMessagesPatient extends Model
{

    protected $table = 'prescriber_messages_patient';

    
    protected $fillable = [
        'prescriber_id',
        'prescriber_name',
        'patient_id',
        'patient_name',
        'message',
        'document_url',
        'is_replying'
    ];
}
