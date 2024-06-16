# Changelog
## Version: v1.0.0 pre-alpha 2 [HtmlCoreServiceProvider failsafe]
Date: 2024-06-16
Collaborators: Lucas Johnston
###
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
- Importfunctionality and import of example pages.
### Deploy instructions:
- Run '''composer install'''
- Run '''php artisan migrate'''
