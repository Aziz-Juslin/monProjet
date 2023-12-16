<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'classe',
        'cycle',
        'option',
        'local',
        'phone',
        'photo_eleve',
        'adresse',
    ];

    protected $table = 'Kelasis';

    public function moyekoli(){
        return $this->belongsTo(Moyekoli::class);
    }
}
