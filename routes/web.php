<?php

use App\Http\Controllers\PDF\InvitationController;
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

// Route::get('/', function () {
//     return view('index');
// })->name('index');

// Index
Route::get('/', [AppController::class,'index'])->name('index');

// Imagenes
Route::post('/imagenes', [ImagenController::class,'store'])->name('image.store');

// Invitaciones cena
Route::get('/create-image-with-text', [ImagenController::class, 'editImageWithText']);

// Admin
Route::get('/administracion', [AdminController::class,'index'])->name('admin.index');
Route::get('/administracion/publications', [AdminController::class,'adminPublications'])->name('admin.publications');
Route::get('/administracion/colaboradores', [AdminController::class,'adminPosts'])->name('admin.posts');
Route::get('/administracion/comentarios', [AdminController::class,'adminComentarios'])->name('admin.comentarios');
Route::get('/administracion/usuarios', [AdminController::class,'adminUsers'])->name('admin.users');
Route::get('/administracion/registerEvent', [AdminController::class,'adminRegisterEvent'])->name('admin.registerEvent');

// Colaboradores
Route::get('/Posts', [PostsController::class,'index'])->name('posts.catalogue');
Route::get('/Posts/registrar-posts', [PostsController::class,'create'])->name('posts.create');
Route::post('/Postss/registrar-posts', [PostsController::class,'store']);
Route::get('/Posts/{post:title}',[PostsController::class,'show'])->name('posts.show');
Route::get('/Posts/{post}/edit',[ PostsController::class,'edit'])->name('posts.edit');
Route::post('/Posts/{post}/edit',[ PostsController::class,'update']);
Route::delete('/Posts/{post}',[ PostsController::class,'destroy'])->name('posts.destroy');


// Login
Route::get('/iniciar-sesion',[LoginController::class,'index'])->name('register.login');
Route::post('/iniciar-sesion',[LoginController::class,'store']);
Route::post('/cerrar-sesion',[LogoutController::class,'store'])->name('register.logout');

// Usuarios
Route::get('/crear-usuario',[ RegisterController::class,'create'])->name('register.create');
Route::post('/crear-usuario',[ RegisterController::class,'store']);

// Catalogo
Route::get('/catalogo', [PublicationsController::class,'index'])->name('publications.catalogue');

//Publicaciones
Route::get('/publications/registrar-publication', [PublicationsController::class,'create'])->name('publications.create');
Route::post('/publications/registrar-publication', [PublicationsController::class,'store']);
Route::get('/publications/{publication}/edit',[ PublicationsController::class,'edit'])->name('publications.edit');
Route::post('/publications/{publication}/edit',[ PublicationsController::class,'update']);
Route::delete('/publications/{publication}',[ PublicationsController::class,'destroy'])->name('publications.destroy');
Route::get('/catalogo/{publication:name}',[PublicationsController::class,'show'])->name('publications.show');

// Comentarios
Route::post('/comentario/{publication:name}',[ComentarioController::class,'store'])->name('comentarios.store');
Route::post('/comentario/{comentario}',[ ComentarioController::class,'update'])->name('comentarios.validate');
Route::delete('/comentario/{comentario}',[ ComentarioController::class,'destroy'])->name('comentarios.destroy');

// Likes
Route::post('/publications/{publication}/likes',[LikeController::class,'store'])->name('publications.likes.store');
Route::delete('/publications/{publication}/likes',[LikeController::class,'destroy'])->name('publications.likes.destroy');

// Registro de evento

Route::get('/register_event/crear/registro/evento/{publication:id}',[RegisterEventController::class,'create'])->name('register_event.create');
Route::post('/register_event/crear/registro/evento/{publication:id}',[RegisterEventController::class,'store'])->name('register_event.store');
Route::get('/register_event/editar/registro/evento/{registers_event}',[ RegisterEventController::class,'edit'])->name('register_event.edit');
Route::post('/register_event/editar/registro/evento/{registers_event}',[ RegisterEventController::class,'update']);
Route::delete('/register_event/eliminar/registro/evento/{register_event}',[ RegisterEventController::class,'destroy'])->name('register_event.destroy');
Route::post('/register_event/validar/registro/evento/{register_event}',[ RegisterEventController::class,'updateStatusValidateRegisterEvent'])->name('register_event.validate');


// Template de invitacion
Route::get('/invitation/preview/pdf',[ InvitationController::class,'previewInvitation'])->name('invitation.preview.pdf');
Route::get('/invitation/send/pdf',[ InvitationController::class,'sendInvitation'])->name('invitation.send.pdf');