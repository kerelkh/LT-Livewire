<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LogoutController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Error404;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Posts\Edit;
use App\Livewire\Posts\Show;
use App\Livewire\Product;
use App\Livewire\Timeline;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function() {
    Route::get('/', Home::class)->name('home');
    Route::get('/about', About::class)->name('about');
    Route::get('/contact', Contact::class)->name('contact');
    Route::get('/posts/show', Show::class)->name('posts.show');
    Route::get('/posts/edit/{comment}', Edit::class)->name('posts.edit');
    Route::get('/timeline', Timeline::class)->name('timeline');
    Route::get('/products', Product::class)->name('products');

});



Route::get('/login', Login::class)->name('login')->middleware(['guest']);
Route::post('/logout', LogoutController::class)->name('logout')->middleware(['auth']);

Route::fallback(Error404::class);
