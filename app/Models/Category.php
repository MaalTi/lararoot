<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations, HasTranslatableSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
    ];

    /**
     * The attributes that are translatables.
     *
     * @var array<int, string>
     */
    protected $translatable = [
        'name',
        'slug',
        'description',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the localised route key for the model.
     *
     * @return string
     */
    public function getLocalizedRouteKey($locale)
    {
        return $this->getTranslation('slug', $locale);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function allParents()
    {
        return $this->belongsTo(Category::class)->with('parent');
    }
    
    public function childs()
    {
        return $this->hasMany(Category::class);
    }
    
    public function allChilds()
    {
        return $this->hasMany(Category::class)->with('childs');
    }
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
