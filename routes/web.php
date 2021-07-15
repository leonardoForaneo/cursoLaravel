<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');
/*
Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

//Ruta que recibe informacion desde el formulario
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

//Recibiendo variables
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

//Route editar
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

//Ruta para editar en la base de datos
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

//Ruta encargada de eliminar un registro (No va a mostrar informacion sino a procesarla)
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');*/



Route::resource('cursos', CursoController::class);
//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

//Para mostrar solo contenido estatico
Route::view('nosotros', 'nosotros')->name('nosotros');

//Ruta para enviar correo
Route::get('contactanos', function () {
    $correo = new ContactanosMailable;
    Mail::to('leo.cpp.jv@gmail.com')->send($correo);
    return "Mensaje enviado";
});




//Recibiendo más de una variable
/*Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if($categoria){
        return "Bienvenido al curso $curso de la categoria $categoria";
    }else{
        return "Bienvenido al curso $curso";
    }
});*/
