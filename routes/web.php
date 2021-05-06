<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//* LOGIN 
// Route::get('/login', [RegisterController::class, 'login']);

    //? Registration

    // Route::get('/register', function () {
    //     return view('login.register');
    // });



    Route::get('/house', function () {
        return view('auth.register_house');
    });
    



//* PAGES 

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //? Forum 
        //Categories
        Route::get('/hp', [ForumController::class, 'index'])->middleware('auth');

        // Topics
        Route::get('/topic', function () {
            return view('forums.topic-list');
        });

        // Posts 
        Route::get('/message', function () {
            return view('forums.message');
        });
        

        // New Post 


        // Edit Post 




    //? Event 
        // Events
        Route::get('/events', [EventController::class, 'index'])->middleware('auth');


        // Event 
        Route::get('/event', [EventController::class, 'read'])->middleware('auth');


        // New event
        Route::get('/event_new', [EventController::class, 'create'])->middleware('auth');


        // Edit event 
        Route::get('/edit', [EventController::class, 'edit'])->middleware('auth');




    //? Profil
        // profil
        Route::get('/profil', function () {
            return view('profil.profil');
        });


        // Edit Profil
        








Auth::routes();
