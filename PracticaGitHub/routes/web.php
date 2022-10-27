<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlGit;


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

Route::get('/', [controlGit::class, 'PFormulario'])->name('PFormulario');
Route::get('/tabla', [controlGit::class, 'PTabla'])->name('PTabla');
Route::post('/requestUser', [controlGit::class, 'procesSolid'])->name('PProcess');

