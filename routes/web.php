<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::resource('tarefas', TarefaController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/show', function () {
    return view('show');
});