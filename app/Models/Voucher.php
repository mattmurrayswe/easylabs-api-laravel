<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Voucher extends Model
{
    use HasFactory;

    protected $softDelete = true;

    protected $fillable = [
        'code',
        'engagement_action',
        'engagement_action_agent',
        'description',
        'expiration',
        'discount',
        'quantity',
        'is_first_box',
        'is_active',
        'uses',
        'cpf',
        'prescriber_id'
    ];

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class, 'prescriber_id');
    }

    public function markAsUsed()
    {
        $this->uses = $this->uses++;
        $this->save();
    }

    public function scopeActive($query)
{
    return $query->where('is_active', '=', 1);
}
}
