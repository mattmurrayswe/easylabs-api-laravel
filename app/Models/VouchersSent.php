<?php

namespace App\Models;

use App\Models\Patient;
use App\Models\Prescriber;
use App\Models\Voucher;
use Illuminate\Database\Eloquent\Model;

class VouchersSent extends Model
{
    protected $table = 'vouchers_sent';

    protected $fillable = [
        'voucher_id',
        'patient_id',
        'sent_by_prescriber_id',
    ];

    public function voucher()
    {
        return $this->belongsTo(Voucher::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class, 'sent_by_prescriber_id');
    }
}
