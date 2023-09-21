<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{

    public function getPriceAttribute($value,)
    {
        $discount = $value  * ($this->discount / 100);
        $final_price = $value - $discount;
        // $originalPrice = $value = ($this->old_price);
        // return number_format($originalPrice, 2);
        return number_format($final_price, 2);
    }

    public Function getprice_after_discountAttribute($value) {

    }

    // public function getPriceAttribute($value) {
    //     $originalPrice = value($this->old_price);
    //     $discount = $value * ($this->discount / 100);
    //     $final_price = $value - $discount;

    //     return [
    //         'original_price' => number_format($originalPrice, 2),
    //         'final_price' => number_format($final_price, 2)
    //     ];
    // }

    public function types()
    {

        return $this->hasMany(Type::class);
    }
}

