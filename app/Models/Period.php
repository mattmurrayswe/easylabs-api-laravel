<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function periods()
    {
        return $this->hasMany(Availability::class, 'period_id');
    }

}
