<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', function ($id) {
});
Route::post('mahasiswa', function ($id) {
});
Route::put('mahasiswa', function ($id) {
});
Route::delete('mahasiswa', function ($id) {
});
Route::get('mahasiswa/{id}', function ($id) {
});
Route::put('mahasiswa/{id}', function ($id) {
});
Route::delete('mahasiswa/{id}', function ($id) {
});

Route::match(['get', 'post'], '/specialUrl', function () {
});
Route::any('/specialMahasiswa', function ($id) {
});

Route::get('/hello', function () {
    return 'Hello World';
    });

Route::get('/world', function () {
        return 'World';
        });

Route::get('/', function () {
        return 'Selamat datang';
        });

Route::get('/about', function () {
        return '244107023008 Naditya Prastia Andino';
        });

Route::get('/user/{name}', function ($name) {
            return 'Nama saya '.$name;
            });

            Route::get('/posts/{post}/comments/{comment}', function
            ($postId, $commentId) {
            return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
            });
            
            Route::get('/articles/{id}', function ($id) {
                return 'Halaman Artikel dengan ID ' . $id;
            });
            
            Route::get('/articles/{id}', function ($id) {
                return "Halaman Artikel dengan ID $id";
            });
            Route::get('/user/{name?}', function ($name='John') {
                return 'Nama saya '.$name;
                });

                Route::get('/user/profile', function() {
                    //
                    })->name('profile');

                   // Group dengan middleware 'first' dan 'second'
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

// Group berdasarkan subdomain
Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

// Group dengan middleware 'auth'
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});
Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
    });
    Route::redirect('/here', '/there');

    Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);