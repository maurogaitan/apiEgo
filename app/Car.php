<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name', 'price', 'year','image','image_2x','image_3x','type'
    ];
    protected $hidden = [
        'user_id'
    ];
    public function featureds()
    {
        return $this->hasMany('App\Featured');
    }
}
