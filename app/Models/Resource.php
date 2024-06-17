<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    public $fillable = [
        'content_id',
        'resource_title',
        'subtitle',
        'creation_date',
        'publication_date',
        'edit_date',
        'abstract',
        'author_profile',
        'author_name',
        'publisher',
        'isbn',
        'original_title',
        'original_subtitle',
        'original_publication_date',
        'translators',
        'resource_url',
    ];


    // Inverse of the one-to-one relationship with Content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
