<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'image', 'position', 'order', 'user_id', 'status',
    ];
}
