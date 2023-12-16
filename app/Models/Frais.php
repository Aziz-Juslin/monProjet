<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Frais extends Model
{
    use HasFactory;
    protected $fillable = [
        'cycle',
        'classe',
        'franc',
        'dollar',
        'trimestre',
        'annee_frais',
        'moyekoli_id',
    ];

    protected $table = 'frais';

    
    protected static function boot(){
        parent::boot();
        static::creating(function($id){
            $dat = date('Y');
            $r = Str::random(4);
            $id->num_recu = "$id->id$r$dat";
        });
   
      
    }

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function moyekoli(){

        return $this->belongsTo(Moyekoli::class);
    }

    public function classe(){

        return $this->hasMany(Classe::class);
    }

    public function depense(){

        return $this->hasMany(Depense::class);
    }

    
    
}

