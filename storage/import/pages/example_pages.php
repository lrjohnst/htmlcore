<?php
/*

Instructions:
1. Create a new .php file in /storage/import/pages/.
2. Copy the full $pages array (lines 15-36) below into the new file.
3. Also put the line of "return $pages;" (line 63) at the bottom of the new file.
3. Create one main element (the array of slug, meta_title, and so on) for each page.
4. Fill in the fields for each page to import.
5. Ensure each field follows the provided format and character limits.
6. The 'slug' should be unique for each page.
7. Set 'private' to '1' if the page should not be publicly accessible.
8. Run php artisan db:seed PageSeeder to complete the import.
9. All .php files inside the /storage/import/pages/ will now be processed.
10. Delete the .php file containing the $pages array after import, or stash it somewhere.

$pages = [
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
        'page_title' => '',
        'publication_date' => '',
        'edit_date' => '',
        'view_name' => '',
    ],
];
*/

$pages = [
    [
        'slug' => 'voorpagina-nl', // Provide the URL part specific for this content (maximum 255 characters).
        'meta_title' => 'Voorpagina', // Provide a title to show on search result pages like Google (maximum 60 characters).
        'meta_description' => '', // Provide a short summary to show on search result pages like Google (maximum 160 characters).
        'robots_tag_content' => 'index, follow', // Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.
        'rel_canonical' => 'https://example.com', // Provide the one, 'official' URL of this content.
        'rel_icon' => 'https://example.com/favicon.ico', // Provide absolute URL to the favicon file.
        'lang_iso_639_1' => 'nl', // Provide the two-character ISO language code for this content.
        'locale' => 'nl', // Provide the locale for this content (for instance: nl_NL, en_EN).
        'private' => '0', // Set to true to mark as private page.
        'page_title' => 'Voorpagina', // Provide the primary title of the page (maximum 255 characters).
        'publication_date' => now(), // Provide date on which the page was first published.
        'edit_date' => null, // Provide date on which the page was last edited.
        'view_name' => 'voorpagina_nl', // Provide the name of the view containing the page's contents (view filename, minus the '.blade.php').
    ],
    [
        'slug' => 'front-page-en', // Provide the URL part specific for this content (maximum 255 characters).
        'meta_title' => 'Front page', // Provide a title to show on search result pages like Google (maximum 60 characters).
        'meta_description' => '', // Provide a short summary to show on search result pages like Google (maximum 160 characters).
        'robots_tag_content' => 'index, follow', // Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.
        'rel_canonical' => 'https://example.com/en', // Provide the one, 'official' URL of this content.
        'rel_icon' => 'https://example.com/favicon.ico', // Provide absolute URL to the favicon file.
        'lang_iso_639_1' => 'en', // Provide the two-character ISO language code for this content.
        'locale' => 'en_US', // Provide the locale for this content (for instance: nl_NL, en_EN).
        'private' => '0', // Set to true to mark as private page.
        'page_title' => 'Front page', // Provide the primary title of the page (maximum 255 characters).
        'publication_date' => now(), // Provide date on which the page was first published.
        'edit_date' => null, // Provide date on which the page was last edited.
        'view_name' => 'front_page_en', // Provide the name of the view containing the page's contents (view filename, minus the '.blade.php').
    ],
    [
        'slug' => 'artikelen', // Provide the URL part specific for this content (maximum 255 characters).
        'meta_title' => 'Artikelen', // Provide a title to show on search result pages like Google (maximum 60 characters).
        'meta_description' => '', // Provide a short summary to show on search result pages like Google (maximum 160 characters).
        'robots_tag_content' => 'index, follow', // Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.
        'rel_canonical' => 'https://example.com/nl/artikelen', // Provide the one, 'official' URL of this content.
        'rel_icon' => 'https://example.com/favicon.ico', // Provide absolute URL to the favicon file.
        'lang_iso_639_1' => 'nl', // Provide the two-character ISO language code for this content.
        'locale' => 'nl_NL', // Provide the locale for this content (for instance: nl_NL, en_EN).
        'private' => '0', // Set to true to mark as private page.
        'page_title' => 'Artikelen', // Provide the primary title of the page (maximum 255 characters).
        'publication_date' => now(), // Provide date on which the page was first published.
        'edit_date' => null, // Provide date on which the page was last edited.
        'view_name' => 'artikelen', // Provide the name of the view containing the page's contents (view filename, minus the '.blade.php').
    ],
    [
        'slug' => 'articles', // Provide the URL part specific for this content (maximum 255 characters).
        'meta_title' => 'Articles', // Provide a title to show on search result pages like Google (maximum 60 characters).
        'meta_description' => '', // Provide a short summary to show on search result pages like Google (maximum 160 characters).
        'robots_tag_content' => 'index, follow', // Provide contents for the HTML robots meta tag. View specifications on: https://developers.google.com/search/docs/crawling-indexing/robots-meta-tag.
        'rel_canonical' => 'https://example.com/en/articles', // Provide the one, 'official' URL of this content.
        'rel_icon' => 'https://example.com/favicon.ico', // Provide absolute URL to the favicon file.
        'lang_iso_639_1' => 'en', // Provide the two-character ISO language code for this content.
        'locale' => 'en_US', // Provide the locale for this content (for instance: nl_NL, en_EN).
        'private' => '0', // Set to true to mark as private page.
        'page_title' => 'Articles', // Provide the primary title of the page (maximum 255 characters).
        'publication_date' => now(), // Provide date on which the page was first published.
        'edit_date' => null, // Provide date on which the page was last edited.
        'view_name' => 'articles', // Provide the name of the view containing the page's contents (view filename, minus the '.blade.php').
    ],
];

return $pages;
