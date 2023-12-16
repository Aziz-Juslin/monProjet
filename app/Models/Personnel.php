<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Personnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'post_nom',
        'prenom',
        'sexe',
        'code_perso',
        'date_ne',
        'etat_civil',
        'phone',
        'qualification',
        'photo_personnel',
    ];

    protected $table = 'personnels';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    protected static function boot(){
        parent::boot();
        static::creating(function($id){
            $dat = date('Y');
            $r = Str::random(4);
            $id->slug = Str::slug(ucfirst($id->nom));
            $id->code_perso = "$id->id$r$dat";
        });
   
      
    }
}
