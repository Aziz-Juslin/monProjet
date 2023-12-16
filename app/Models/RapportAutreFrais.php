<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportAutreFrais extends Model
{
    use HasFactory;

    protected $fillable = [

        'franc',
        'dollar',
        'date_rapport',
    ];

    protected $tables = 'rapport_autre_frais';


        public function user()
        {
            return $this->belongsTo(User::class);
        }


}
