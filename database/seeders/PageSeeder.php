<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Get all PHP files from /storage/import/pages/
        $files = File::allFiles(storage_path('import/pages'));

        foreach ($files as $file) {

            // Require the PHP file to get the $pages array
            $pages = include $file->getRealPath();

            foreach($pages as $page) {

                $content = Content::create([
                    'slug' => $page['slug'],
                    'meta_title' => $page['meta_title'],
                    'meta_description' => $page['meta_description'],
                    'robots_tag_content' => $page['robots_tag_content'],
                    'rel_canonical' => $page['rel_canonical'],
                    'rel_icon' => $page['rel_icon'],
                    'lang_iso_639_1' => $page['lang_iso_639_1'],
                    'locale' => $page['locale'],
                    'private' => $page['private'],
                ]);

                $page = Page::create([
                    'content_id' => $content->id,
                    'page_title' => $page['page_title'],
                    'publication_date' => $page['publication_date'],
                    'edit_date' => $page['edit_date'],
                    'view_name' => $page['view_name'],
                ]);
            }
        }
    }
}
