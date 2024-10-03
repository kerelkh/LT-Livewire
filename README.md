# LT Livewire

Project for livewire laravel, more like components next level from blade

## How To

1. `composer require laravel/livewire`
2. to make component `php artisan make:livewire <Component>`
3. This will make livewire component and livewire view
4. Next you need to make route on web.php
5. Link it to the component livewire on app folder


## App Layout

to make layout `php artisan livewire:layout` , this will create file app.blade.php (layout app) on resources/views/components/layouts.

## Need to change config for livewire?

publish the livewire config with this command `php artisan livewire:publish --config` . It will poublish config on Config folder, there you can change config livewire as you want
