<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategorieController;

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



        // New topic 
        Route::get('/new-topic', [CategorieController::class, 'create'])->middleware('auth');

        Route::post('/topics', [CategorieController::class, 'store'])->middleware('auth');

        // Posts 
        Route::get('/posts', [TopicController::class, 'create'])->middleware('auth');
        

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
        


    //? Forum 
        // Affichage de toutes les categories du forum 
        Route::get('/{forum:slug}', [ForumController::class, 'show'])->middleware('auth');

        // Topics
        Route::get('/{forum:slug}/{categorie:slug}', [CategorieController::class, 'show'])->middleware('auth');






Auth::routes();
