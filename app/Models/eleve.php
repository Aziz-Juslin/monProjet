<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class eleve extends Model
{

    use HasFactory;

    protected $fillable = [
        'id',
        'slug',
        'code_eleve',
        'nom',
        'post_nom',
        'prenom',
        'sexe',
        'date_ne',
        'lieu',
        'annee_scolaire',
        'dat_eleve',
        'active'
     ];

   protected $table = "eleves";

   public function user(){
        return $this->belongsTo(User::class);
   }

    public function kelasi(){
        return $this->hasOne(Classe::class);
    }

    public function photo_moyekoli(){
        return $this->hasOne(Photo_moyekoli::class);
    }

    public function moboti(){
        return $this->hasOne(Moboti::class);
    }
    public function getRouteKeyName(){
        return 'slug';
    }

    protected static function boot(){
        parent::boot();
        static::creating(function($id){
            $dat = date('Y');
            $r = Str::random(3);
            $id->slug = Str::slug($id->nom);
            $id->code_eleve = "$id->id-$r-$dat";

        });


    }
}
