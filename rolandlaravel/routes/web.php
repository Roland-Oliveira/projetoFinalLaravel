<?php

use App\Http\Controllers\GamerController;
use Illuminate\Support\Facades\Route;

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
    return view('home.home');
})->name('home');

Route::get('/jogos', [GamerController::class, 'jogos']
)-> name('home.jogos');

Route::get('/generos', [GamerController::class, 'generos']
)-> name('home.generos');

Route::get('/jogosgenero/{id}', [GamerController::class, 'jogosGenero']
)-> name('jogosGenero');



