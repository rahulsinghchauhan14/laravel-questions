@csrf isequal {{ csrf_field() }}

@method('PATCH||DELETE||GET||POST')

#laravel validation rules

before adding in composer.json file please run this command "composer dump-autoload"

# create model and controller at the same time using command
-> php artisan make:controller controllerName -r -m
	when you hit the enter after that it ask you that you want to create model or not
	then write yes and hit enter. :)

# how to create the helper in laravel
-> create Helpers file inside the App folder and create some helper.php file inside the folder
	for access the helper file you have to add helper path inside the composer.json file 
	and after that don't forgot the run this command "composer dump-autoload"'

#