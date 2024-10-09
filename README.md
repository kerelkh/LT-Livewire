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

## TIPS

> 1. If you want SPA model look like, use `wire:navigate` on link (tag `<a>`) <== Prefered way (i think :) )


## FORM POST

Treat `Form` like Component when you make form you make component.
In App\Livewire\<Component> you can define control over form.

1. For field, you can define it as public property on class and link it to html using `wire:model=<NameVariable>`
2. For submit, you type in on form tag `wire:submit=<FunctionName>` . FunctionName is what livewire will execute if form is submit
3. in Livewire 3, you don't need define `wire:submit.prevent=<FunctionName>` to prevent default action when submit.
4. Want to validate input ? you can validate field by define the rules on top of public property
   `#[Validate('required')]
    public $author = '';`
5. to run validate, in your function submit you run `$this->validate()` so when submit, the field will validate before execute into next line
6. when validate fail, the error will display like you using casual blade template, where you define `@error('author')`
7. to send flash message you can run `session()->flash('success', 'Comment has been saved.');`
8. and reset the field to empty again you can type `$this->reset()`. this will reset form input.
