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
        'clinic_adress_id',
        'especialidade',
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

    public function getCellphoneAttribute($value)
    {
        // Remove any characters that are not digits, e.g., ( and )
        $cleanedNumber = preg_replace('/[^0-9]/', '', $value);
    
        // Check if the cleaned number starts with "1" (assuming it is the country code), and remove it if present
        if (substr($cleanedNumber, 0, 1) === '1') {
            $cleanedNumber = substr($cleanedNumber, 1);
        }
    
        // Check if the cleaned number starts with "55" (assuming it is the area code), and remove it if present
        if (substr($cleanedNumber, 0, 2) === '55') {
            $cleanedNumber = substr($cleanedNumber, 2);
        }
    
        // Assuming the cellphone number is 10 digits now (e.g., 559324370)
        // Format the number as (XX) XXXX-XXXX
        return '(' . substr($cleanedNumber, 0, 2) . ') ' . substr($cleanedNumber, 2, 4) . '-' . substr($cleanedNumber, 6);
    }
    
}
