<?php

use App\Http\Controllers\CommentController;
use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Error404;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Posts\Edit;
use App\Livewire\Posts\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/posts/show', Show::class)->name('posts.show');
Route::get('/posts/edit/{comment}', Edit::class)->name('posts.edit');


Route::get('/login', Login::class)->name('login');

Route::fallback(Error404::class);
