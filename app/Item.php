<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image_small', 'image_big', 'content_full', 'content_des', 
            'link', 'link_demo', 'type', 'file_size', 'price', 'saleoff', 'cartegory', 
                'user_id', 'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function trans()
    {
        return $this->hasMany('App\Trans', 'item_id');
    }

    public function getLinkAttribute($value)
    {
        return config('upload.path.public').config('upload.url.file').$value;
    }

    public function getImageSmallAttribute($value)
    {
        return config('upload.path.public').config('upload.url.image').$value;
    }

    public function getImageBigAttribute($value)
    {
        return config('upload.path.public').config('upload.url.image').$value;
    }

    public function setPriceAttribute($value)
    {
        $symbol_thousand = '.';
        $decimal_place = 0;
        $rlt = number_format($value, $decimal_place, '', $symbol_thousand);
        $this->attributes['price'] = $rlt;
    }

    public function setSaleoffAttribute($value)
    {
        $symbol_thousand = '.';
        $decimal_place = 0;
        $rlt = number_format($value, $decimal_place, '', $symbol_thousand);
        $this->attributes['saleoff'] = $rlt;
    }

}
