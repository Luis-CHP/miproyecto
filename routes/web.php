<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\PlantillaController;
use App\Models\categorias;
use App\Models\Computer;

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/miprimeravista', function () {
    return view('gatos.miprimeravista');
});

Route::get('/perritos', function () {
    return view('gatos.misperritos');
});

Route::get('/gatitos', function () {
    return view('gatos.misgatitos');
});

Route::get('/conejos', function () {
    return view('gatos.misconejos');
});

Route::get('/canguros', function () {
    return view('gatos.miscanguros');
});

Route::get('/dinosaurios', function () {
    return view('gatos.misdinos');
});
*/


Route::controller(CatController::class)->group(function(){
    
    Route::get('/miprimeravista','indexm');

    Route::get('/perritos', 'perros');
    
    Route::get('/gatitos', 'gatos');
    
    Route::get('/conejos', 'conejos');
    
    Route::get('/canguros','canguros');
    
    Route::get('/dinosaurios', 'dinos');
    
});


Route::controller(PlantillaController::class)->group(function(){

    Route::get('/miproyecto','miproyecto');
    Route::get('/miscanguros','miscanguros');
    Route::get('/misconejos','misconejos');
    Route::get('/misdinosaurios','misdinos');
    Route::get('/misgatitos','misgatitos');
    Route::get('/misperritos','misperritos');
});


Route::get ('/', CatController::class);

    
Route::get ('/cursos', [cursoController::class, 'indes']);

Route::get ('/cursos/create', [cursoController::class, 'create']);

Route::post ('/cursos', [cursoController::class, 'store']);

Route::get ('/cursos/{curso}', [cursoController::class, 'show']);

Route::get ('/cursos/{curso}/edit', [cursoController::class, 'edit']);

Route::put ('/cursos/{curso}', [cursoController::class, 'update']);

Route::delete ('/cursos/{curso}', [cursoController::class, 'delete']);

Route::get('/insertarvalor', function() {
    $computer = new  Computer;
    $computer->model= 'Legion';
    $computer->mark= 'Lenovo';
    $computer->size= 16;
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->save();


    $computer = new  Computer;
    $computer->model= 'HP';
    $computer->mark= 'Notebook';
    $computer->size= 16;
    $computer->published_at='2024-11-03 13:11:00';
    $computer->is_active=true;
    $computer->save();
    return $computer;
});

Route::get('/selectmod', function() {

    $computer=Computer::all();
    return $computer;
    //$computer=Computer::where('model','legion')->first();

    //$computer->model='Acer';
    //$computer->save();
    //return $computer;
    
});

/*Route::get('/elimardatos', function() {
    $computer= Computer::find(2);
    $computer->delete();
});
*/
Route::get ('/prueba', function(){   
$computer = Computer::find(1);
return $computer->published_at->diffForHumans();
    /* Crear un nuevo registro
    $categorias = new categorias;

    $categorias->titile= 'titulo de prueba 2';
    $categorias->content= 'contenido de prueba 2';
    $categorias->categoria= 'categoriia de prueba 2';

    $categorias->save(); 
    return $categorias;


    Actualizar registro
    $categorias = categorias::where('title', 'titulo de prueba 1')
    ->first();
    
    $categorias->categoria= 'desarrollo web';
    $categorias->save();
    return $categorias;
    
    Listar Registros
    $categorias = categorias::where('id','>=','2')
    ->get();
    $categorias = categorias::orderBy('content', 'desc')
    ->select('id', 'title', 'content', 'category')
    ->take(2)
    ->get();
    return $categorias;

    /*Eliminar registros
    $categorias = categorias::find(1);
    $categorias->delete();
    return "Elimiado correctamente";


    //Mostrar formatos de fechas
    $categorias = categorias::find(1);
    return $categorias->published_at->format('d/m/y');

    /*$categorias = categorias::find(1);
    dd ($categorias->is_active);*/

    /*$categorias = categorias::where('title', 'categoria 1')
    ->first();
    
    /*$categorias->category= 'desarrollo web';
    $categorias->save();
    return $categorias;*/
    
});