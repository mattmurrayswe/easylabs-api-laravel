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
        'especialidade',
        'email',
        'password',
        'cpf',
        'street_number',
        'complement',
        'city',
        'state',
        'street',
        'neighborhood',
        'cep',
        'documents',
        'cellphone',
        'crm',
        'active',
        'indicate_clinic',
        'clinic_adress_id',
        'id_permissao'
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

    public function routeNotificationForApn()
    {
        return $this->apn_token;
    }

    public function patients()
    {
        return $this->hasMany(Patient::class, "prescriber_id", "id");
    }

    public function clinic_address()
    {
        return $this->belongsTo(ClinicAdress::class, 'clinic_adress_id');
    }

    public function permissao()
    {
        return $this->hasOne(Permissao::class, "id", "id_permissao");
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
