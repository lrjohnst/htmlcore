# Changelog
## Version: v1.0.0 beta 1 [Acceptation testing]
Date: 2024-06-17
Collaborators: Lucas Johnston
## Description:
First representative version.
### Summary:
- Multilanguage 404 pages.
- Finalized example_pages.php and PageSeeder.
## Deploy instructions:
- Make sure there is a _/bootstrap/cache_ folder.
- Make sure there is a _/storage/framework/sessions_ folder.
- Make sure there is a _/storage/framework/cache_ folder.
- Make sure there is a _/storage/framework/views_ folder.
- Run '''composer install'''
- Run '''php artisan key:generate'''
- Update the APP_NAME, APP_ENV, APP_DEBUG, APP_URL variables, and the database connection data in .env.
- Run '''php artisan migrate'''
- Run '''php artisan db:seed'''
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
