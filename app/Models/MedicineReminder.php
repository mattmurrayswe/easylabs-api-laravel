<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineReminder extends Model
{
    use HasFactory;

    protected $table = 'medicine_reminders';
    
    protected $fillable = [
        'patient_id',
        'medicine_id',
        'sent',
        'reminder_time',
    ];
}
