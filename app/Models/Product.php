<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $fillable = ['image','name','price','description','quantity'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,'product_categories');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class)->where('quantity', '>', 0);
    }
}
