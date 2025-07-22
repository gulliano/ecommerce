<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
       
    ];

    /**
     * Get the products for the category.
    */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    } 
}
