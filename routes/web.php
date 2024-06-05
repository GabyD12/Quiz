<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('cursos/listar',[AccidentController::class,'index'])->name('curso.index');
Route::get('cursos/create',[AccidentController::class,'create']);
Route::post('cursos/store', [AccidentController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[AccidentController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[AccidentController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[AccidentController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[AccidentController::class,'edit'])->name('curso.edit');
