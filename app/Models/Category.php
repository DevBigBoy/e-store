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
        'parent_id',
        'name',
        'slug',
        'description',
        'image',
        'status',
    ];

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', '=', 'active');
    }


    public function scopeFilter(Builder $builder, $filters)
    {

        $builder->when($filters['name'] ?? false, function ($builder, $value) {
            $builder->where('name', 'LIKE', "%{$value}%");
        });

        $builder->when($filters['status'] ?? false, function ($builder, $value) {
            $builder->where('status', '=', $value);
        });
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function getImageAttribute($value)
    {
        return 'storage/' . $value;
    }
}
