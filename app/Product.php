<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'categories_id', 'reviews_id', 'name', 'short_description','price'
    ];
    public function categorie()
    {
        return $this->belongsTo('App\Categorie','categories_id');
    }
    public function reviews()
    {
        return $this->belongsTo('App\Reviews','reviews_id');
    }
}
