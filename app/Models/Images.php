<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
