<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    //
    protected $fillable = [
        'code_deposit','item_id', 'user_id', 
            'code_bank', 'sender_name', 'phone', 
                'acc_bank', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function feed()
    {
        return $this->hasOne('App\Feed');
    }
}
