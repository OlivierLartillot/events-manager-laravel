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
/* 
    Event::create([
        'name' => 'Cinéma en plein nerf',
        'description' => 'Un super film ... ' ,
        'location' => 'Lyon, FR',
        'price' => 0,
        'starts_at' => new DateTime('+5 days')
    ]);
    Event::create([
        'name' => 'Match foot',
        'description' => 'Un super match ... ' ,
        'location' => 'Montpellier, FR',
        'price' => 15,
        'starts_at' => new DateTime('+10 hours')
    ]); 
 */
    $events = Event::all();
    return view('events.index')->withEvents($events);
});
