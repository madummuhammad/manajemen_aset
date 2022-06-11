<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MutasiinventoryController;
use App\Http\Controllers\TransaksimutasiinventoryController;

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

Route::get('/login',[AuthController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[AuthController::class,'authenticate']);
Route::post('/logout',[AuthController::class,'logout']);

Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        $grup = DB::table('grup_aset')->get();
        return view('dashboard',['grup'=>$grup]);
    });
    Route::get('/property/{grup_asset}',[PropertyController::class,'index']);
    Route::get('/property/create/{grup_asset}',[PropertyController::class,'create']);
    Route::get('/property/show/{id_grup_asset}/{kode_property}',[PropertyController::class,'show']);
    Route::patch('/property/show',[PropertyController::class,'update']);
    Route::post('/property/create',[PropertyController::class,'store']);
    Route::delete('/property',[PropertyController::class,'destroy']);

    Route::get('/inventory/create/{grup_asset}',[InventoryController::class,'create']);
    Route::post('/inventory/create',[InventoryController::class,'store']);
    Route::get('/inventory/show/{id_grup_asset}/{kode_inventory}',[InventoryController::class,'show']);
    Route::patch('/inventory/show',[InventoryController::class,'update']);
    Route::delete('/inventory',[InventoryController::class,'destroy']);
    
    Route::get('/inventory/mutasi/{grup_asset}/{id_mutasi}',[MutasiinventoryController::class,'show']);
    Route::post('/inventory/mutasi',[MutasiinventoryController::class,'store']);
    Route::get('/inventory/mutasi',[MutasiinventoryController::class,'index']);
    Route::post('/inventory/transaksi_mutasi',[TransaksimutasiinventoryController::class,'store']);

    Route::get('/inventory/{grup_asset}',[InventoryController::class,'index']);
});






