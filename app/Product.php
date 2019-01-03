<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //1
    protected $fillable=['suit_descript', 'suit_name', 'photo', 'categories_cat_id', 'suit_price', 'suit_size', 'suit_quantity'];
    public function category() 
    {
        $this->belongsTo(Category::class);
    }

    
}
