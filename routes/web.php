<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Services;
use App\Livewire\Portfolio;
use App\Livewire\Skills;
use App\Livewire\Experience;
use App\Livewire\Blog;
use App\Livewire\Contact;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/services', Services::class);
Route::get('/portfolio', Portfolio::class);
Route::get('/skills', Skills::class);
Route::get('/experience', Experience::class);
Route::get('/blog', Blog::class);
Route::get('/blog/{slug}', Blog::class)->name('blog.show');
Route::get('/contact', Contact::class);
