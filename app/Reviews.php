<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = [
        'users_id', 'description', 'rating',
    ];

    public function user()
    {
        return $this->belongsTo('App\User','users_id');
    }
}
