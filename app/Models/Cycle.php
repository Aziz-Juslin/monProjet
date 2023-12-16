<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Cycle extends Model
{
    use HasFactory;
    protected $fillable = [
    	'cycle',
        'slug',
        'unive',
    ];

    protected $table = "cycles";

    protected static function boot(){
        parent::boot();
        static::creating(function($id){
            $id->slug = ucfirst(Str::slug($id->cycle));
        });

    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
