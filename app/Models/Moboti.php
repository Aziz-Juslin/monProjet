<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moboti extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'code_parent',
        'profession',
        'photo_parent',
        'phone_parent',
    ];

    protected $table = "Mobotis";

    public function moyekoli(){
        return $this->belongsTo(Moyekoli::class);
    }
}
