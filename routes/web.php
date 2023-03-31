<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\gestionClientControllers;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('Menue',[MenuController::class, 'Menue']);
Route::get('Menuef',[MenuController::class, 'Menuef']);
Route::get('/redirects',[HomeController::class,"index"]);


Route::get('/about',[MenuController::class, 'menue']);

Route::get('/passager',[MenuController::class, 'menue1']);

Route::get('service-details',[MenuController::class, 'Menue']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/trajet/traitement', [App\Http\Controllers\TrajetController::class, 'traitement_trajet']);
Route::get('/Trajet', [App\Http\Controllers\TrajetController::class, 'form_gestionTrajet']);
Route::delete('/delete_destination/{id}', 'App\Http\Controllers\gestionClientControllers@destroy')->name('delete_destination');
Route::delete('/delete_user/{id}', 'App\Http\Controllers\gestionClientControllers@destroy')->name('delete_user');
Route::get('/GestionUsers', [App\Http\Controllers\gestionClientControllers::class, 'form_gestionClient']);

/*
Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/private', function () {
        return view('Admin');
    });
    
});
*/

require __DIR__.'/auth.php';