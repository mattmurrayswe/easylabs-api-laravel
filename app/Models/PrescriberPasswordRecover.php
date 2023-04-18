<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrescriberPasswordRecover extends Model
{

    protected $table = "password_reset_tokens_prescribers";

    protected $primaryKey = 'email';
    
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'token',
        'email',
    ];

}
