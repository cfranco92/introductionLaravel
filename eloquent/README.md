# commands
$ php artisan make:model -h
$ php artisan make:model Post -m -f

$ php artisan tinker
>>> factory(App\Post::class, 30)->create()

$php artisan migrate:refresh