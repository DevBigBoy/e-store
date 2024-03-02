<?php

namespace App\Models;

use App\Observers\CategoryObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

#[ObservedBy([CategoryObserver::class])]
class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_en',
        'name_ar',
        'slug',
        'description',
        'parent_id',
        'image',
        'status',
    ];

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', '=', 'active');
    }


    public function scopeFilter(Builder $builder, $filters)
    {
        // Search by English Name
        $builder->when($filters['name_en'] ?? false, function ($builder, $value) {
            $builder->where('name_en', 'LIKE', "%{$value}%");
        });

        // Search by Arabic Name
        $builder->when($filters['name_ar'] ?? false, function ($builder, $value) {
            $builder->where('name_ar', 'LIKE', "%{$value}%");
        });

        // Filter by status (active/inactive)
        $builder->when($filters['status'] ?? false, function ($builder, $value) {
            $builder->where('status', '=', $value);
        });

        $builder->when($filters['category'] ?? false, function ($builder, $value) {
            if (is_array($value)) {
                $builder->whereIn('parent_id', $value);
            } else {
                $builder->where('parent_id', '=', $value);
            }
        });

        $builder->orderBy('name_en', 'asc');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')->withDefault(['name_en' => 'Primary category']);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}