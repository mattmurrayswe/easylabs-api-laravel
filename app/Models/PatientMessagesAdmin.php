<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientMessagesAdmin extends Model
{

    protected $table = 'patient_messages_admin';

    
    protected $fillable = [
        'patient_id',
        'patient_name',
        'message',
        'document_url',
        'admin_replying'
    ];
}
