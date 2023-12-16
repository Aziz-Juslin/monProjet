<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Moyekoli;
use Illuminate\Support\Facades\Auth;
use App\Models\Frais;

class RapportFrais extends Model
{
    use HasFactory;

    protected $fillable = [

        'franc',
        'dollar',
        'date_rapport',
    ];

    protected $tables = 'rapport_frais';


        public function user()
        {
            return $this->belongsTo(User::class);
        }


}
