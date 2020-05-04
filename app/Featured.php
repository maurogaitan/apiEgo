<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    protected $fillable = [
        'title', 'description', 'url'
    ];
}
