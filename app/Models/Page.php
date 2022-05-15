<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasTranslatableSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Page extends Model
{
    use HasFactory, HasTranslations, HasTranslatableSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'is_home',
        'seo_title',
        'seo_description',
        'content',
        'styles',
        'scripts',
        'layout_id',
    ];

    /**
     * The attributes that are translatables.
     *
     * @var array<int, string>
     */
    protected $translatable = [
        'title',
        'slug',
        'seo_title',
        'seo_description',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
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

    /**
     * Get the localised route key for the model.
     *
     * @return string
     */
    // public function resolveRouteBinding($slug)
    // {
    //     return static::whereIn('slug', function($q) use ($slug) {
    //         $q->where('slug', $slug);
    //     })->first()->slug ?? abort(404);
    // }

    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}
