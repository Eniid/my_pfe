<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OwlsController;
use App\Http\Controllers\HcController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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





Auth::routes();




//* REGISTER

    Route::get('/register/house', [RegisterController::class, 'setHouse'])->middleware('auth');
    Route::post('/register/house', [RegisterController::class, 'storeHouse'])->middleware('auth');
    Route::get('/register/wand', [RegisterController::class, 'setWand'])->middleware('auth');
    Route::post('/register/wand', [RegisterController::class, 'storeWand'])->middleware('auth');




//* HOME PAGE

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('home');
    Route::post('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('home');
    Route::get('/termes-and-policy', [App\Http\Controllers\HomeController::class, 'tp'])->name('t&p');

//* Search thingy




    Route::get('/teste', function () {
        return view('teste');
    });  

    //* Events



           // Events
           Route::get('/events', [EventController::class, 'index'])->middleware('auth');

   
           // New event
           Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
           Route::post('/events/create', [EventController::class, 'store'])->middleware('auth');
   
   
           // Edit event 
           Route::get('/events/edit/{event:slug}', [EventController::class, 'edit'])->middleware('auth');

           // Event 

           Route::get('/events/{event:slug}', [EventController::class, 'show'])->middleware('auth');
           Route::post('/events/{event:slug}', [PostController::class, 'store_event'])->middleware('auth');
   

           Route::post('/events/{event:slug}/join', [EventController::class, 'participation'])->middleware('auth');
           Route::post('/events/{event:slug}/leave', [EventController::class, 'leave'])->middleware('auth');


    //* Owls 
        Route::get('/owls', [OwlsController::class, 'show'])->middleware('auth');

    //* House Cup 
        Route::get('/house-cup-history', [hcController::class, 'show'])->middleware('auth');




    //* Profil
            // profil
            Route::get('/profil/{user}', [UserController::class, 'index'])->middleware('auth');
            Route::post('/profil/{user}/description', [UserController::class, 'store_desc'])->middleware('auth');
            Route::post('/profil/edit', [UserController::class, 'store_info'])->middleware('auth');
            Route::post('/profil/{user}/add_f', [UserController::class, 'add_f'])->middleware('auth');
            Route::post('/profil/{user}/rem_f', [UserController::class, 'rem_f'])->middleware('auth');


            // Edit Profil
        


    //* Forum 


            // Un forum
            Route::get('/{forum:slug}', [ForumController::class, 'show'])->middleware('auth');

            // Une categorie
            Route::get('/{forum:slug}/{categorie:slug}', [CategorieController::class, 'show'])->middleware('auth');


            // nouveau topic 
            Route::get('/{forum:slug}/{categorie:slug}/topics/create', [TopicController::class, 'create'])->middleware('auth');
            Route::post('/{forum:slug}/{categorie:slug}/topics/store', [TopicController::class, 'store'])->middleware('auth');
        
            // Un topic 
            Route::get('/{forum:slug}/{categorie:slug}/{topic:slug}', [TopicController::class, 'show'])->middleware('auth');
        
            Route::post('/{forum:slug}/{categorie:slug}/{topic:slug}', [PostController::class, 'store'])->middleware('auth');

        
            // Edit topic
            Route::get('/{forum:slug}/{categorie:slug}/post/edit/{post}', [TopicController::class, 'edit'])->middleware('auth');
            //Route::get('/{forum:slug}/{categorie:slug}/{topic:slug}/edit', [CategorieController::class, 'show'])->middleware('auth');

            // Edit post
            //Route::get('/{forum:slug}/{categorie:slug}/{topic:slug}/{post:slug}/edit', [PostController::class, 'edit'])->middleware('auth');


            // Like
            Route::post('/{forum:slug}/{categorie:slug}/{topic:slug}/like', [PostController::class, 'like'])->middleware('auth');
            Route::delete('/{forum:slug}/{categorie:slug}/{topic:slug}/unlike', [PostController::class, 'unlike'])->middleware('auth');



