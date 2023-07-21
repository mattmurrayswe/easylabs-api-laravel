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
    ];

    public function scopeIsInactive($query)
    {
        return $query->where('active',false);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class, 'patient_treatment')->withTimestamps();
    }

    public function newTreatments()
    {
        return $this->hasMany(NewTreatment::class);
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
}
