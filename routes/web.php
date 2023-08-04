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

use App\Http\Controllers\EventsController;

Route::get('/', [EventsController::class, 'index']);

Route::get('/events/create', [EventsController::class, 'create'] )->middleware('auth');

Route::get('/events/{id}', [EventsController::class, 'show'] );

Route::post('/events', [EventsController::class, 'store']);

Route::delete('/events/{id}', [EventsController::class, 'destroy'])->middleware('auth');

Route::get('/events/edit/{id}', [EventsController::class, 'edit'])->middleware('auth');

Route::put('/events/update/{id}', [EventsController::class, 'update'])->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', [EventsController::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}', [EventsController::class, 'joinEvent'])->middleware('auth');

Route::delete('/events/leave/{id}', [EventsController::class, 'leaveEvent'])->middleware('auth'); 

