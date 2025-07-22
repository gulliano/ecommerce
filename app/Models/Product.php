<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'sku',
        'is_active',
        'category_id',
    ];
    protected $casts = [
        'is_active' => 'boolean',
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    /**
     * Get the category that owns the product.
     */
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the images for the product.
     */
    public function images() :HasMany
    {
        return $this->hasMany(ProductImage::class); 
    }
}
