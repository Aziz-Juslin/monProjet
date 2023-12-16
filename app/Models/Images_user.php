<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images_user extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_user',
    ];

    protected $table = 'images_users';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
