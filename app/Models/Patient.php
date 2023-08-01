<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Socialite\Contracts\User as SocialiteUser;

class Patient extends Authenticatable
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
        'cellphone',
        'birth',
        'active',
        'push_notification',
        'email_notification',
        'remember_medicine',
        'treatment_feedback',
        'prescriber_id',
        'id_permissao',
        'uploaded_foto_perfil',
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
        'email_verified_at' => 'datetime'
    ];

    public function scopeIsInactive($query)
    {
        return $query->where('active',false);
    }

    // public function treatments()
    // {
    //     return $this->belongsToMany(Treatment::class, 'patient_treatment')->withTimestamps();
    // }

    public function treatments()
    {
        return $this->hasMany(TreatmentsRef::class, 'patient_id', 'id');
    }

    public function permissao()
    {
        return $this->hasOne(Permissao::class, "id", "id_permissao");
    }

    public function prescriber()
    {
        return $this->belongsTo(Prescriber::class);
    }

    public static function fromSocialite(SocialiteUser $user)
    {
        return self::updateOrCreate([
            'email' => $user->getEmail(),
        ], [
            'name' => $user->getName(),
            // You can add more fields if needed
        ]);
    }

    public function findForPassport($username)
    {
        return $this->where('email', $username)->first();
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
