<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $fillable = [
        'content_id',
        'article_title',
        'subtitle',
        'creation_date',
        'publication_date',
        'edit_date',
        'abstract',
        'author_profile',
        'author_name',
        'view_name',
     ];

    // Inverse of the one-to-one relationship with Content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
