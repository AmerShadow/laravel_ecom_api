<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;


class Product extends Model
{
    protected $fillable=[
        'name','desciption','price','discount','stock',
    ];
    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
