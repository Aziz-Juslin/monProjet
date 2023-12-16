<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use App\Models\Cycle;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ecole',
        'province',
        'telephone',
        'role',
        'annee_user',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot(){
        parent::boot();
        static::creating(function($id){
            $id->slug = Str::slug(ucfirst($id->ecole));
        });

    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function images_users(){
        return $this->hasMany(Images_user::class);
    }

    public function modalite(){
        return $this->hasMany(Modalite::class);
    }
    public function image_ecoles(){
        return $this->hasMany(image_ecole::class);
    }
    public function info_ecole(){
        return $this->hasMany(Info_ecole::class);
    }
    public function info_unive(){
        return $this->hasMany(Info_unive::class);
    }

    public function frais(){
        return $this->hasMany(Frais::class);
    }

    public function gestionnaire(){
        return $this->hasMany(Gestionnaire::class);
    }

    public function option(){
        return $this->hasMany(Option::class);
    }

    public function eleve(){
        return $this->hasMany(eleve::class);
    }

    public function cycle(){
        return $this->hasMany(Cycle::class);
    }

    public function personnel(){
        return $this->hasMany(Personnel::class);
    }
}
