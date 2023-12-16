<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_gestionnaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo_gestionnaire',

    ];

    protected $table = 'image_gestionnaires';

    public function gestionnaire(){
        return $this->belongsTo(gestionnaire::class);
    }
}
