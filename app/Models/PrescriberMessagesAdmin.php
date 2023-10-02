<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriberMessagesAdmin extends Model
{

    protected $table = 'prescriber_messages_admin';

    
    protected $fillable = [
        'prescriber_id',
        'prescriber_name',
        'message',
        'document_url',
        'is_replying'
    ];
}
