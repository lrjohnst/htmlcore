# htmlcore
A Laravel-based CMS that relies on plain HTML for content editing.
## Installation instructions
- Make sure there is a _/resources/views_ folder.
- Make sure there is a _/resources/views/articles_ folder.
- Make sure there is a _/resources/views/pages_ folder.
- Make sure there is a _/bootstrap/cache_ folder.
- Make sure there is a _/storage/framework/sessions_ folder.
- Make sure there is a _/storage/framework/cache_ folder.
- Make sure there is a _/storage/framework/views_ folder.
- Run '''composer install'''
- Run '''php artisan key:generate'''
- Update the APP_NAME, APP_ENV, APP_DEBUG, APP_URL variables, and the database connection data in .env.
- Run '''php artisan migrate'''
- Run '''php artisan db:seed'''
## Multilanguage
HTMLcore selects the language by use of Laravel's built in Localization feature. Language is selected based on the following procedure:
1. Picks A,
2. If A not found: Picks B
3. If B not found: Picks C
