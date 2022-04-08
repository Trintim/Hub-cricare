<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategorie extends Model
{
    use HasFactory;


    protected $fillable = [
        'categorie',
        'categorie_slug'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
