<?php

use App\Http\Controllers\RegisterEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\EventosController;

// Index
Route::get('/', [AppController::class,'index'])->name('index');
Route::get('/eventos', [AppController::class,'appEventos'])->name('pages.eventos');

// Imagenes
Route::post('/imagenes', [ImagenController::class,'store'])->name('image.store');

// Admin
Route::get('/administracion', [AdminController::class,'index'])->name('admin.index');
Route::get('/administracion/eventos', [AdminController::class,'adminEventos'])->name('admin.eventos');
Route::get('/administracion/comentarios', [AdminController::class,'adminComentarios'])->name('admin.comentarios');
Route::get('/administracion/usuarios', [AdminController::class,'adminUsers'])->name('admin.users');
Route::get('/administracion/registerEvent', [AdminController::class,'adminRegisterEvent'])->name('admin.registerEvent');
Route::get('/administracion/colaboradores', [AdminController::class,'adminPosts'])->name('admin.posts');

// Login
Route::get('/iniciar-sesion',[LoginController::class,'index'])->name('register.login');
Route::post('/iniciar-sesion',[LoginController::class,'store']);
Route::post('/cerrar-sesion',[LogoutController::class,'store'])->name('register.logout');

// Usuarios
Route::get('/crear-usuario',[ RegisterController::class,'create'])->name('register.create');
Route::post('/crear-usuario',[ RegisterController::class,'store']);


// Comentarios
Route::post('/comentario/{publication:name}',[ComentarioController::class,'store'])->name('comentarios.store');
Route::post('/comentario/{comentario}',[ ComentarioController::class,'update'])->name('comentarios.validate');
Route::delete('/comentario/{comentario}',[ ComentarioController::class,'destroy'])->name('comentarios.destroy');

// Likes
Route::post('/publications/{publication}/likes',[LikeController::class,'store'])->name('publications.likes.store');
Route::delete('/publications/{publication}/likes',[LikeController::class,'destroy'])->name('publications.likes.destroy');

//Eventos
Route::get('/eventos/registrar', [EventosController::class,'create'])->name('eventos.create');
Route::post('/eventos/registrar', [EventosController::class,'store']);
Route::get('/eventos/{evento}/edit',[ EventosController::class,'edit'])->name('eventos.edit');
Route::post('/eventos/{evento}/edit',[ EventosController::class,'update']);
Route::delete('/eventos/{publication}',[ EventosController::class,'destroy'])->name('eventos.destroy');

//Catalogo
Route::get('/catalogo', [EventosController::class,'index'])->name('eventos.catalogue');
Route::get('/catalogo/{publication:name}',[EventosController::class,'show'])->name('evento.show');


