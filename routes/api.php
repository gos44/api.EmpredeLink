<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprendedorController;
use App\Http\Controllers\EmprendimientoController;
use App\Http\Controllers\ResenaController; 
use App\Http\Controllers\Api\InversionistaController;
use App\Http\Controllers\Api\PublicarEmprendimientoController;
use App\Http\Controllers\ConexionController;
use App\Models\Inversionista;
use App\Models\Publicar_Emprendimiento;

//use App\Http\Controllers\Api\RegisterController;
//use App\Http\Controllers\Api\CategoryController;



    // Route::get('categories', [CategoryController::class,'index'])->name('api.v1.categories.index');
    // Route::post('categories', [CategoryController::class,'store'])->name('api.v1.categories.store');
    // Route::get('categories/{category}', [CategoryController::class,'show'])->name('api.v1.categories.show');
    // Route::put('categories/{category}', [CategoryController::class,'update'])->name('api.v1.categories.update');
    // Route::delete('categories/{category}', [CategoryController::class,'destroy'])->name('api.v1.categories.delete');
///PRUEBA

//Emprendedor

Route::get('/prueba', function () {
    return 'prueba';
});

    Route::get('/Emprendedores', [EmprendedorController::class,'index'])->name('api.Emprendedores.index');
    Route::post('Emprendedores', [EmprendedorController::class,'store'])->name('api.Emprendedores.store');
    Route::get('Emprendedores/{Emprendedor}', [EmprendedorController::class,'show'])->name('api.Emprendedores.show');
    Route::put('Emprendedores/{Emprendedor}', [EmprendedorController::class,'update'])->name('api.Emprendedores.update');
    Route::delete('Emprendedores/{Emprendedor}', [EmprendedorController::class,'destroy'])->name('api.Emprendedores.delete');

//emprendimiento

Route::get('emprendimiento/create', [EmprendimientoController::class, 'creates']);
Route::post('emprendimiento/store', [EmprendimientoController::class, 'store'])->name('emprendimiento.store');
Route::get('emprendimientos/listar2', [EmprendimientoController::class, 'index'])->name('emprendimientos.index');
Route::delete('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'destroy'])->name('emprendimiento.destroy');
Route::get('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'show'])->name('emprendimiento.show');
Route::put('emprendimiento/{emprendimiento}', [EmprendimientoController::class, 'update'])->name('emprendimiento.update');
Route::get('emprendimiento/{emprendimiento}/editar', [EmprendimientoController::class, 'edit'])->name('emprendimiento.edit');


//plicar_emprendimiento k

// Route::get('/trabajo/tabla',[PublicarEmprendimientoController::class,'create']);
// Route::post('Publicar_Emprendimiento/store', [PublicarEmprendimientoController::class,'store'])->name('Publicar_Emprendimiento.store');
// Route::get('trabajo/listar',[PublicarEmprendimientoController::class,'index'])->name('trabajo.index');
// Route::get('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'show'])->name('trabajo.show');
// Route::put('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'update'])->name('trabajo.update');//nuevo
// Route::delete('trabajo/{trabajo}',[PublicarEmprendimientoController::class,'destroy'])->name('trabajo.destroy');
// Route::get('trabajo/{trabajo}/editar',[PublicarEmprendimientoController::class,'edit'])->name('trabajo.edit');

//reseñas

Route::get('resena/create',[ResenaController::class,'create']);
Route::post('resenas/store', [ResenaController::class,'store'])->name('resenas.store');
Route::get('resena/listar',[ResenaController::class,'index'])->name('resena.index');
Route::get('resena/{resena}',[ResenaController::class,'show'])->name('resena.show');
Route::put('resena/{resena}',[ResenaController::class,'update'])->name('resena.update');//nuevo
Route::delete('resena/{resena}',[ResenaController::class,'destroy'])->name('resena.destroy');
Route::get('resena/{resena}/editar',[ResenaController::class,'edit'])->name('resena.edit');

//inversionista



    Route::get('inversionistas', [InversionistaController::class, 'index'])->name('api.inversionistas.index');
    Route::post('inversionistas', [InversionistaController::class, 'store'])->name('api.inversionistas.store');
    Route::get('inversionistas/{inversionista}', [InversionistaController::class, 'show'])->name('api.inversionistas.show');
    Route::put('inversionistas/{inversionista}', [InversionistaController::class, 'update'])->name('api.inversionistas.update');
    Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy'])->name('api.inversionistas.destroy');


// Route::get('inversionistas/create', [InversionistaController::class, 'create'])->name('inversionistas.create');
// Route::post('inversionistas/store', [InversionistaController::class, 'store'])->name('inversionistas.store');
// Route::get('inversionistas/listar', [InversionistaController::class, 'index'])->name('inversionistas.index');
// Route::delete('inversionistas/{inversionista}', [InversionistaController::class, 'destroy'])->name('inversionistas.destroy');
// Route::get('inversionistas/{inversionista}', [InversionistaController::class, 'show'])->name('inversionistas.show');
// Route::put('inversionistas/{inversionista}',[InversionistaController::class,'update'])->name('inversionistas.update');
// Route::get('inversionistas/{inversionista}/editar',[InversionistaController::class,'edit'])->name('inversionistas.edit');

//conexion (asociar)

Route::get('/interes/asociar', [ConexionController::class, 'asociar'])->name('interes.asociar');
Route::post('/interes/store', [ConexionController::class, 'store'])->name('interes.store');


//api k
Route::get('publicar', [PublicarEmprendimientoController::class,'index'])->name('api.publicar__emprendimientos.index');
 Route::post('publicar', [PublicarEmprendimientoController::class,'store'])->name('api.publicar__emprendimientos.store');
 Route::get('publicar/{publicar_emprendimiento}', [PublicarEmprendimientoController::class,'show'])->name('api.publicar__emprendimientos.show');
 Route::put('publicar/{publicar_emprendimiento}', [PublicarEmprendimientoController::class,'update'])->name('api.publicar__emprendimientos.update');
 Route::delete('publicar/{publicar_emprendimiento}', [PublicarEmprendimientoController::class,'destroy'])->name('api.publicar__emprendimientos.delete');

