<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public $fillable = [
        'content_id',
        'publication_date',
        'edit_date',
        'view_name',
    ];

    // Inverse of the one-to-one relationship with Content
    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
