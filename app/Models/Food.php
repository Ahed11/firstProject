<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'weight',
        'price'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
