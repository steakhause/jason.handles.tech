<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /** @use HasFactory<\Database\Factories\ProductCategoryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'parent_id',
        'is_active',
        'sort_order',
        'image',
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'is_active' => 'boolean',
        'slug' => 'string',
        'parent_id' => 'integer',
        'sort_order' => 'integer',
        'image' => 'string',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }
}
