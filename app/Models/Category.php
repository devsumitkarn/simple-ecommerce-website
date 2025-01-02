<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'status',
        'parent_id',
    ];

    protected static function booted()
    {
        static::creating(function ($categorys) {
            $slug = Str::slug($categorys->name);
            $originalSlug = $slug;

            $count = 1;
            while (Category::where('slug', $slug)->exists()) {
                $slug = "{$originalSlug}-{$count}";
                $count++;
            }

            $categorys->slug = $slug;
        });
    }

    public function product()
    {
        $this->hasMany(Product::class);
    }

    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
