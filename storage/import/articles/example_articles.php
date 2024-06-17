<?php
/*

Instructions:
1. Create a new .php file in /storage/import/articles/.
2. Copy the full $articles array (lines 15-36) below into the new file.
3. Also put the line of "return $articles;" (line 63) at the bottom of the new file.
3. Create one main element (the array of slug, meta_title, and so on) for each article.
4. Fill in the fields for each article to import.
5. Ensure each field follows the provided format and character limits.
6. The 'slug' should be unique for each article.
7. Set 'private' to '1' if the article should not be publicly accessible.
8. Run php artisan db:seed ArticleSeeder to complete the import.
9. All .php files inside the /storage/import/articles/ will now be processed.
10. Delete the .php file containing the $articles array after import, or stash it somewhere.

$articles = [
    [
        'slug' => '',
        'meta_title' => '',
        'meta_description' => '',
        'robots_tag_content' => '',
        'rel_canonical' => '',
        'rel_icon' => '',
        'lang_iso_639_1' => '',
        'locale' => '',
        'private' => '0',
        'article_title' => '',
        'subtitle' => '',
        'creation_date' => '',
        'publication_date' => '',
        'edit_date' => '',
        'abstract' => '',
        'author_profile' => '',
        'author_name' => '',
        'view_name' => '',
    ],
];
*/

$articles = [
    [
        'slug' => 'new-york-architecture-18th-century', // Provide the URL part specific for this content (maximum 255 characters).
        'meta_title' => 'New York Architecture in the 18th Century', // Provide a title to show on search result pages like Google (maximum 60 characters).
        'meta_description' => 'Explore the fascinating evolution of New York’s architecture during the 18th century.', // Provide a short summary to show on search result pages like Google (maximum 160 characters).
        'robots_tag_content' => 'index, follow', // Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.
        'rel_canonical' => 'https://example.com/en/articles/new-york-architecture-18th-century', // Provide the one, 'official' URL of this content.
        'rel_icon' => 'https://example.com/favicon.ico', // Provide absolute URL to the favicon file.
        'lang_iso_639_1' => 'en', // Provide the two-character ISO language code for this content.
        'locale' => 'en_US', // Provide the locale for this content (for instance: nl_NL, en_EN).
        'private' => '0', // Set to true to mark as private article.
        'article_title' => 'New York Architecture in the 18th Century', // Provide the primary title of the article (maximum 255 characters).
        'subtitle' => 'The Evolution of Urban Design', // Optionally provide the subtitle of the article (maximum 255 characters).
        'creation_date' => '2024-05-12 10:05:00', // Provide date on which the resource was created.
        'publication_date' => '2024-05-12 16:45:00', // Provide date on which the article was first published.
        'edit_date' => '2014-06-03 23:55:00', // Provide date on which the article was last edited.
        'abstract' => 'This article delves into the architectural developments in New York City during the 18th century, highlighting key structures and design philosophies.', // Provide a short abstract-like summary.
        'author_profile' => 'https://example.com/authors/jane-doe', // Provide the URL to the author's online profile (maximum 255 characters).
        'author_name' => 'Jane Doe', // Provide the author name, or names. Used for various metadata, such as Schema.org (maximum 255 characters).
        'view_name' => 'new_york_architecture_18th_century', // Provide the name of the view containing the article's contents (view filename, minus the '.blade.php').
    ],
];

return $articles;
