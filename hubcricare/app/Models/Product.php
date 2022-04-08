<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'description',
        'productcategorie_id'
    ];

    public function categorie(){
        return $this->belongsTo(Productcategorie::class);
    }

    public function getCreatedAttFormatAttribute(){
        return $this->created_at->format('d/m/Y');
    }
}
