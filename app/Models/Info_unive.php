<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_unive extends Model
{
    use HasFactory;

    protected $fillable = [
        'adresse',
        'regime',
        'adresse',
        'gestion',
    ];

    protected $table = 'info_unive';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
