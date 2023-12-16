<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutreFrais extends Model
{
    use HasFactory;

    protected $fillable = [
        'franc',
        'dollar',
        'categorie',
        'trimestre',
        'date_paye',

    ];

    protected $table = 'autre_frais';
        /**
         * Get the user that owns the AutreFrais
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
    public function moyekoli()
    {
        return $this->belongsTo(Moyekoli::class);
    }
}
