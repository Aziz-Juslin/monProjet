<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_ecole extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_ecole',

    ];

    protected $table = 'image_ecoles';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
