<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'price', 'image', 'quantity', 'description'];

    public function category() {

        return $this->belongsTo(Category::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
