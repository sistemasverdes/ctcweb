<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
    return view('inicio');
})->name('inicio');

Route::get('/nosotros', function (){
    return view('nosotros');
})->name('nosotros');

Route::get('/documentacion', function (){
    return view('documentacion');
})->name('documentacion');

Route::post('/email/send', MailController::class)->name('sendemail');

// NOTICIAS
Route::get('/noticias/reunion_ministro', function (){
    return view('news/reunion');
})->name('reunion.ministro');

Route::get('/noticias/visita_defensa', function (){
    return view('news/visita_defensa');
})->name('visita.defensa');

Route::get('/noticias/zohe', function (){
    return view('news/zohe');
})->name('zohe');

Route::get('/noticias/20221001', function (){
    return view('news/robot_corte');
})->name('robot.corte');

Route::get('/noticias/20221231', function (){
    return view('news/asamblea_general_2022');
})->name('asamblea.general.2022');

Route::get('/noticias/20230615', function (){
    return view('news/visita_strata');
})->name('visita.strata');
