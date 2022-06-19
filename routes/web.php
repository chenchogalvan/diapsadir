<?php

use App\Http\Controllers\DataUserController;
use App\Models\DataUser;
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
    $user = DataUser::all();
    return view('index', compact('user'));
});

Route::get('/export', function(){
    return view('export');
});

Route::get('/card/{slug}', function(DataUser $slug){
    return view('card', compact('slug'));
})->name('ver_usuario');

Route::post('/exportar', [DataUserController::class, 'exportDataUSer'])->name('export_data');
