<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = ['ean', 'name', 'description', 'short_desc', 'dimension', 'img', 'brand_name', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
