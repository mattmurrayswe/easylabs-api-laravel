<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentHasMedicines extends Model
{

    protected $table = "treatment_has_medicines";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'treatment_id',
        'medicine_id',
        'intervalo_em_horas',
        'inicio_do_uso',
        'fim_do_uso',
        'how_many'
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, "medicine_id", "id");
    }
}
