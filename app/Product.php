<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $appends = ['main_img','array_img'];


   public function getMainImgAttribute()
   {
        $tempArray = explode(',',$this->attributes['image']);
        return $tempArray[0];
   }
   public function getArrayImgAttribute()
   {
        $tempArray = explode(',',$this->attributes['image']);
        return $tempArray;
   }					
}
