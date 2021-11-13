<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudCtrl;
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

Route::get('/', [CrudCtrl::class, 'showPage']);
Route::get('add', [CrudCtrl::class, 'showAdd']);
Route::post('add', [CrudCtrl::class, 'addUser']);
Route::get('delete/{id}', [CrudCtrl::class, 'deleteUser']);
Route::get('update/{id}', [CrudCtrl::class, 'showUpdate']);
Route::post('update', [CrudCtrl::class, 'updateUser']);
