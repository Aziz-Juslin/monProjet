<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Moyekoli extends Model
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

   protected $table = "moyekolis";

   public function user(){
        return $this->belongsTo(User::class);
   }

    public function kelasi(){
        return $this->hasOne(Kelasi::class);
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
            $idd = Moyekoli::pluck('id')->last();
            $r = Str::random(4);
            $id->slug = Str::slug(ucfirst($id->nom));
            $id->code_eleve = $r.Str::slug($id->id).$dat;
        });


    }
}
