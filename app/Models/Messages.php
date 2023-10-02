<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{

    protected $table = 'messages';

    
    protected $fillable = [
        'from_id',
        'from_entity',//prescriber,patient,admin
        'to_id',
        'to_entity',
        'message',
        'document_url'
    ];
}
