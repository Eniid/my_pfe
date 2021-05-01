<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/hp', function () {
    return view('forums.hp');
});

Route::get('/bs', function () {
    return view('forums.bs');
});

Route::get('/rp', function () {
    return view('forums.rp');
});

Route::get('/topic', function () {
    return view('forums.topic-list');
});

Route::get('/message', function () {
    return view('forums.message');
});

Route::get('/new', function () {
    return view('forums.new-topic');
});

Route::get('/event', function () {
    return view('event.event');
});

Route::get('/events', function () {
    return view('event.events');
});

Route::get('/event_new', function () {
    return view('event.new');
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/login', function () {
    return view('login.login');
});
