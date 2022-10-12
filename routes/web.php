<?php

use App\Event;
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

/*     Event::create([
        'name' => 'Cinéma en plein nerf',
        'description' => 'Un super film ce soir ... ' ,
        'location' => 'Paris, FR',
        'price' => 10
    ]); */
    $events = Event::all();
    return view('events.index')->withEvents($events);
});
