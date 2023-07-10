<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Prescriber extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf',
        'address',
        'documents',
        'indicate_clinic',
        'cellphone',
        'crm',
        'cnpj',
        'company_name',
        'active',
        'clinic_adress_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'address' => 'array',
        'documents' => 'array',
        'indicate_clinic' => 'boolean'
    ];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function clinic_address()
    {
        return $this->belongsTo(ClinicAdress::class, 'clinic_adress_id');
    }

    public function availability()
    {
        return $this->hasMany(Availability::class, 'prescriber_id');
    }
    
    public function vouchers()
    {
        return $this->hasMany(Voucher::class, 'prescriber_id');
    }
}
