<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get all PHP files from /storage/import/articles/
        $files = File::allFiles(storage_path('import/articles'));

        foreach ($files as $file) {

            // Require the PHP file to get the $articles array
            $articles = include $file->getRealPath();

            foreach($articles as $article) {

                $content = Content::create([
                    'slug' => $article['slug'],
                    'meta_title' => $article['meta_title'],
                    'meta_description' => $article['meta_description'],
                    'robots_tag_content' => $article['robots_tag_content'],
                    'rel_canonical' => $article['rel_canonical'],
                    'rel_icon' => $article['rel_icon'],
                    'lang_iso_639_1' => $article['lang_iso_639_1'],
                    'locale' => $article['locale'],
                    'private' => $article['private'],
                ]);

                $article = Article::create([
                    'content_id' => $content->id,
                    'article_title' => $article['article_title'],
                    'subtitle' => $article['subtitle'],
                    'creation_date' => $article['creation_date'],
                    'publication_date' => $article['publication_date'],
                    'edit_date' => $article['edit_date'],
                    'abstract' => $article['abstract'],
                    'author_profile' => $article['author_profile'],
                    'author_name' => $article['author_name'],
                    'view_name' => $article['view_name'],
                ]);
            }
        }
    }
}
