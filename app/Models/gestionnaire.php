<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Gestionnaire as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use App\Models\Cycle;
class gestionnaire extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nom',
        'sexe',
        'password',
        'image',
        'role',
        'phone',
        'etat_civil',
        'date_ne',
    ];

    protected $table = 'gestionnaires';

    public function user(){
        return $this->belongsTo(User::class);
    }

}
