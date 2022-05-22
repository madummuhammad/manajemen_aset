<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InventoryController;

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
    $grup = DB::table('grup_aset')->get();
    return view('dashboard',['grup'=>$grup]);
});

Route::get('/property/{grup_asset}',[PropertyController::class,'index']);
Route::get('/property/create/{grup_asset}',[PropertyController::class,'create']);
Route::get('/property/show/{id_grup_asset}/{kode_property}',[PropertyController::class,'show']);
Route::patch('/property/show/{id_grup_asset}/{kode_property}',[PropertyController::class,'update']);
Route::post('/property/create',[PropertyController::class,'store']);
Route::delete('/property',[PropertyController::class,'destroy']);

Route::get('/inventory/{grup_asset}',[InventoryController::class,'index']);



