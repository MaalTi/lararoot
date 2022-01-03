<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Library extends Model implements HasMedia
{
    use HasFactory, HasTranslations, HasSlug, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'alt',
        'caption',
    ];

    /**
     * The attributes that are translatables.
     *
     * @var array<int, string>
     */
    protected $translatable = [
        'alt',
        'caption',
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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->acceptsMimeTypes([
                'image/jpeg',
                'image/png',
                'image/webp'
            ])
            ->withResponsiveImages();

        $this->addMediaCollection('pdfs')
            ->acceptsMimeTypes(['application/pdf']);

        $this->addMediaCollection('videos')
            ->acceptsMimeTypes([
                'video/mpeg',
                'video/ogg',
                'video/webm'
            ]);

        $this->addMediaCollection('audios')
            ->acceptsMimeTypes([
                'audio/aac',
                'audio/ogg',
                'audio/wav',
                'audio/webm',
                'audio/mpeg'
            ]);

        $this->addMediaCollection('others')
            ->acceptsMimeTypes([
                'text/csv',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'image/svg+xml',
                'image/x-icon',
                'image/gif',
                'text/calendar',
                'application/json',
                'application/vnd.oasis.opendocument.text',
                'application/vnd.oasis.opendocument.spreadsheet',
                'application/vnd.oasis.opendocument.presentation',
                'application/vnd.ms-powerpoint',
                'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'application/x-rar-compressed',
                'application/rtf',
                'text/markdown ',
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'text/plain',
                'application/xml',
                'application/zip',
                'application/x-7z-compressed',
                'application/x-tar'
            ]);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150)
            ->performOnCollections(
                'images',
                'pdfs',
                'videos'
            );
    }
}
