<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Scopes\StoreScope;
use App\Observers\ProductObserver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

// #[ScopedBy([StoreScope::class])]
#[ObservedBy([ProductObserver::class])]
class Product extends Model
{
    use HasFactory, SoftDeletes;

    // $table->id();
    // $table->foreignId('store_id')->constrained('stores')->cascadeOnDelete();
    // $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
    // $table->string('name');
    // $table->string('slug')->unique();
    // $table->text('description')->nullable();
    // $table->string('image')->nullable();
    // $table->float('price')->default(0);
    // $table->float('compare_price')->nullable();
    // $table->json('options')->nullable();
    // $table->float('rating')->default(0);
    // $table->boolean('featured')->default(0);
    // $table->enum('status', ['active', 'draft', 'archvied'])->default('active');
    // $table->timestamps();
    // $table->softDeletes();

    protected $fillable = [
        'store_id',
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'price',
        'compare_price',
        'options',
        'rating',
        'featured',
        'status', //['active', 'draft', 'archvied']
    ];

    public function scopeActive(Builder $builder)
    {
        $builder->where('status', '=', 'active');
    }

    protected $casts = [
        'options' => 'json',  // Cast options to JSON
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }


    public function getImageUrlAttribute()
    {
        // Check if the image does not exist, return a default image URL or an empty string
        if (!$this->image) {
            return asset('images/default.png');  // Change 'images/default.png' to your actual default image path
        }

        // Check if the image is from an external resource, return it without modification
        if (Str::startsWith($this->image, ['http://', 'https://'])) {
            return $this->image;
        }

        // For internally stored images, return the public URL
        return Storage::url($this->image);  // This ensures compatibility with various storage drivers
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,       // Related model
            'product_tag',     // Pivot Table Name
            'product_id',       // FK in Pivot Table for the current model
            'tage_id',          // Fk in pivot Table for the related model
            'id',               // PK for current model
            'id',               // PK for Related model
        );
    }


    protected static function booted()
    {
        // static::addGlobalScope('store', function (Builder $builder) {
        //     $user = Auth::user();
        //     if ($user->store_id) {
        //         $builder->where('store_id', '=', $user->store_id);
        //     }
        // });
    }
}
