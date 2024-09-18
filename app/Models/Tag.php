<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $timestamp = false;

    protected $fillable = [
        'name',
        'slug',
    ];


    public function products()
    {
        return $this->belongsToMany(
            Tag::class,       // Related model
            'product_tag',     // Pivot Table Name
            'tage_id',          // Fk in pivot Table for the current model
            'product_id',       // FK in Pivot Table for the Related model
            'id',               // PK for current model
            'id',
        );
    }
}