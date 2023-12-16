<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalite extends Model
{
    use HasFactory;

    protected $fillable = [

        'classe',
        'montant_cdf',
        'montant_dollar',
        'cycles',
        'annee_modalite',
    ];

    protected $table = "modalites";

     public function getRouteKeyName(){

        return 'trimestre';
    }


    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
