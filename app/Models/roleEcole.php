<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roleEcole extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_ecole'
    ];

    protected $table = 'role_ecoles';


    public function role_ecole(){

        return $this->belongsTo(User::class);
    }
}
