<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// $posts = [
//     ['Titulo' => 'Primero'],
//     ['Titulo' => 'Segundo'],
//     ['Titulo' => 'Tercero'],
//     ['Titulo' => 'Cuarto '],
//     ['Titulo' => 'Quinto'],
// ];

Route::view('/', 'welcome')->name('home');
// Route::view('blog', 'blog', ['posts' => $posts])->name('blog');

// Route::get('/blog', [PostController::class, 'index'])->name('posts.inde');//actualizar nombre o resource no funciona
// Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => [
        'blog' => 'post'
    ]
]);

Route::view('nosotros', 'about')->name('about');

Route::middleware(['auth', 'password.confirm'])->group(function (){
    Route::view('contact', 'contact')->name("contact");
});

require __DIR__.'/auth.php';