<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public $fillable = [
        'slug',
        'meta_title',
        'meta_description',
        'robots_tag_content',
        'rel_canonical',
        'rel_icon',
        'lang_iso_639_1',
        'locale',
        'private',
    ];


    // One-to-one relationship with Article
    public function article()
    {
        return $this->hasOne(Article::class);
    }

    // One-to-one relationship with Resource
    public function resource()
    {
        return $this->hasOne(Resource::class);
    }

    // One-to-one relationship with Page
    public function page()
    {
        return $this->hasOne(Page::class);
    }
}
