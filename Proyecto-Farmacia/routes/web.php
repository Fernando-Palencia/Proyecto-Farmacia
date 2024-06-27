<?php

use App\Http\Controllers\cliente_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tipoelem_controller;
use App\Http\Controllers\Proveedor_Controller;
use App\Http\Controllers\producto_Controller;



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
    return view('principal');
})->name('principal');
//*******************************************************************************************************//
                                    // TIPO_ELEMENTOS
                                    
Route::get('Tipos',[tipoelem_controller::class,'principal_tipo'])->name('princitipo'); /*A*/ 

Route::get('Tipos/creacion',[tipoelem_controller::class,'creacion_tipo'])->name('crea_tipo'); /*A*/ 

Route::post('Tipos/adicionar',[tipoelem_controller::class,'adicionar_tipo'])->name('adicion_tipo'); /*A*/ 

Route::get('Tipos/modificar/{id}',[tipoelem_controller::class,'modificar_tipo'])->name('modifi_tipo'); /*A*/ 

Route::put('Tipos/Actualizar',[tipoelem_controller::class,'actualizar_tipo'])->name('actualiza_tipo');
 
Route::get('Tipos/eliminar/{id}',[tipoelem_controller::class,'eliminar_tipo'])->name('elimina_tipo');  /*A*/ 

//*******************************************************************************************************//
                                    // PROVEEDOR
    
Route::get('Proveedor',[Proveedor_Controller::class,'principal_prov'])->name('principrov'); /*A*/ 

Route::get('Proveedor/creacion',[Proveedor_Controller::class,'creacion_prov'])->name('crea_prov');  /*A*/ 

Route::post('Proovedor/adicionar',[Proveedor_Controller::class,'adicionar_prov'])->name('adicion_prov'); 

Route::get('Proveedor/modificar/{id}',[Proveedor_Controller::class,'modificar_prov'])->name('modifi_prov');

Route::put('Proveedor/actualizar',[Proveedor_Controller::class,'actualizar_prov'])->name('actualiza_prov');

Route::get('Proveedor/eliminar/{id}',[Proveedor_Controller::class,'eliminar_prov'])->name('elimina_prov'); /*A*/ 

//*******************************************************************************************************//
                                    //PRODUCTO

Route::get('Producto',[producto_Controller::class,'principal_prod'])->name('principrod'); /*A*/ 

Route::get('Producto/creacion',[producto_Controller::class,'creacion_prod'])->name('creacion_prod'); /*A*/ 
                                    
Route::post('Producto/adicionar',[producto_Controller::class,'adicionar_prod'])->name('adicion_prod'); 
                                    
Route::get('Producto/modificar/{id}',[producto_Controller::class,'modificar_prod'])->name('modifi_prod');
                                    
Route::put('Producto/actualizar',[producto_Controller::class,'actualizar_prod'])->name('actualiza_prod');
                                    
Route::get('Producto/eliminar/{id}',[producto_Controller::class,'eliminar_prod'])->name('elimina_prod');

//*******************************************************************************************************//
                                    //CLIENTE

Route::get('Cliente',[cliente_Controller::class,'principal_cli'])->name('princicli');

Route::get('Cliente/creacion',[cliente_Controller::class,'creacion_cli'])->name('creacion_clie');
                                    
Route::post('Cliente/adicionar',[cliente_Controller::class,'adicionar_cli'])->name('adicion_cli');
                                    
Route::get('Cliente/modificar/{id}',[cliente_Controller::class,'modificar_cli'])->name('modifi_cli');
                                    
Route::put('Cliente/actualizar',[cliente_Controller::class,'actualizar_cli'])->name('actualiza_cli');
                                    
Route::get('Cliente/eliminar/{id}',[cliente_Controller::class,'eliminiar_cli'])->name('elimina_cli');

//*******************************************************************************************************//


 Route::get('test', ['as' => 'test', 'uses' => 'AlertController@show']);
                                    


