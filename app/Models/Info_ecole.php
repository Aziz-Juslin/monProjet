<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_ecole extends Model
{
    use HasFactory;

    protected $fillable = [
        'adresse',
        'regime',
        'devise',
        'commune',
        'district',
    ];

    protected $table = 'info_ecoles';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
