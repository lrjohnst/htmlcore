# Changelog
## Version: v1.0.4 [Locale options and middleware]
Date: 2025-03-20
Collaborators: Lucas Johnston
### Description:
Improved the multilanguage functionality.
### Summary
- SetLanguage middleware now applies to all web.php routes. Selects language in following order of importance: (1) Get the language from the first segment of the requested URL, for instance: https://example.com/en results in 'en', (2) Get the preferred language from client's browser, (3) Get fallback language from environment file.
- The application now uses built-in localization features: https://laravel.com/docs/11.x/localization.
### Deploy instructions:
- Add the ```APP_FALLBACK_LANGUAGE``` variable to the .env with a two-character ISO 3166 language code _(see env.example)_.
- Add the ```AVAILABLE_LANGUAGES``` variable to the .env with a comma-separated list of two-character ISO 3166 language codes _(see env.example)_.
## Version: v1.0.3 [Restored Exceptions/Handler.php]
Date: 2025-03-16
Collaborators: Lucas Johnston
## Version: v1.0.2 [Fallback language - 404 template and a Readme]
Date: 2025-03-14
Collaborators: Lucas Johnston
## Version: v1.0.1 [Untracked all view files]
Date: 2024-06-17
Collaborators: Lucas Johnston
### Description:
It's not functional to have any view files tracked, so they're now untracked. To-do: Create a demo data import tool.
## Version: v1.0.0 [Basic HTML-based CMS with import function]
Date: 2024-06-17
Collaborators: Lucas Johnston
### Description:
This first version contains a basic routing system and example pages to quickly set up a basic website. HtmlCore works with plain HTML templates for storage, reading, and editing content.
### Deploy instructions:
- Make sure there is a _/bootstrap/cache_ folder.
- Make sure there is a _/storage/framework/sessions_ folder.
- Make sure there is a _/storage/framework/cache_ folder.
- Make sure there is a _/storage/framework/views_ folder.
- Run '''composer install'''
- Run '''php artisan key:generate'''
- Update the APP_NAME, APP_ENV, APP_DEBUG, APP_URL variables, and the database connection data in .env.
- Run '''php artisan migrate'''
- Run '''php artisan db:seed'''
## Version: v1.0.0 beta 1 [Acceptation testing]
Date: 2024-06-17
Collaborators: Lucas Johnston
### Description:
First representative version.
### Summary:
- Multilanguage 404 pages.
- Finalized example_pages.php and PageSeeder.
## Version: v1.0.0 pre-alpha 2 [HtmlCoreServiceProvider failsafe]
Date: 2024-06-16
Collaborators: Lucas Johnston
### Description
Bugfix: Make HtmlCoreServiceProvider failsafe (it now breaks upon first install).
## Version: v1.0.0 pre-alpha 1 [Setting up deploy structure for first blog]
Date: 2024-06-14
Collaborators: Lucas Johnston
### Description:
This very first development release is to set up the deployment structure for the first blog.
### Summary:
- Basic ContentController for Pages, Articles and Resources.
- Basic migrations and models for Pages, Articles, Resources and Settings.
- ServiceProvider to register settings from database and from /config/htmlcore.php.
- Example views.
- Import functionality and import of example pages.
