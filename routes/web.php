<?php

use App\Http\Controllers\FisheryController;
use App\Http\Controllers\FishesController;
use App\Models\Fish;
use App\Models\Fishery;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::resource('fisheries',FisheryController::class)->middleware(['authuser']);
Route::resource('fishes',FishesController::class)->middleware(['authuser']);


Route::get('/', function () {

    $fishes = Fish::all();
    $fisheries = Fishery::all();
    return view('home', ['fishes' => $fishes,'fisheries' => $fisheries]);
})->name('start');


require __DIR__.'/auth.php';


