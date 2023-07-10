<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VoucherLog extends Model
{
    use HasFactory;

    protected $softDelete = true;
    protected $table = 'vouchers_log';

    protected $fillable = [
        'prescriber_id',
        'patient_id',
        'voucher_code',
    ];

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }


}
