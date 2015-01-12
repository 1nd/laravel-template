How to set up for developers
-----------------------------

1. Get the repo (e.g. by `git clone`).
2. `composer install` to install libraries and dependencies.
3. Set up file `sample.env.local.php`. Its instruction is inside the file.
4. Set up configurations in `app/config`.
5. Set up configurations in `bootstrap/start.php`.
6. Run the migrations and seeds: `php artisan migrate` and `php artisan db:seed`.
7. `composer dump -o` to generate optimized autoload file.
8. Done.