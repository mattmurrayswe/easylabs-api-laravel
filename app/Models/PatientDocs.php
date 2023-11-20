<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDocs extends Model
{
    protected $table = 'patient_docs';

    protected $fillable = [
        'patient_id',
        'doc_name',
        'doc_url'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
