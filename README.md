# LT Livewire package
Project for livewire laravel, more like components next level from blade
## How To install livewire
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

## FORM EDIT
Edit form livewire:
1. Create component laravel for edit and use model binding
2. use lifecycle hook like mount() to initialize public property to the form
3. Create method for update like : `update()` to save newest data like usual controller
4. then fire a session flash `session()->flash('success', 'Update data succeed');` and redirect if you want to `$this->redirect()`

## FORM DELETE
To delete you can fire like dispatch event on click delete button
1. `
   <button wire:click="$dispatch('delete-comment', { comment: {{ $co }}})" wire:confirm="Are you sure?" type="button">
        <img src="{{ asset('icons/remove.png') }}" class="w-4 h-4"/>
   </button>
`
* when click button: dispatch will fire method on event listening 'delete-comment' with param `$comment`
* wire:confirm will fire javascript confirmation

2. `#[On('delete-comment')]
    public function delete(Comment $comment)
    {
        try{
            $comment->delete();
        }catch (\Exception $e){
            session()->flash('error', 'Failed delete comment.');
        }
    }`
* this method will delete `$comment`.


### Nested Component


### Make Product Page

1. create product page
2. create product detail
3. Add review column

### Make Product Detail

### Make Cart

1. create link menu cart
2. create page display cart and total price

### Make Product Status

### Make history product

### Make Filter katalog

### Make Admin Section

1. Create dashboard admin
2. create product list
3. create add product
4. create edit product

### Admin input product
1. Add product
2. edit product

### Dashboard stock sell

###
