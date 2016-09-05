<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    $user = new App\User;
    $user->notify(new \App\Notifications\TrelloCreated);
    $user->notify(new \App\Notifications\SlackPosted);
});
