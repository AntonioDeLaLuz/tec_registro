<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Posts;
use App\Models\Publications;
use App\Models\Comentario;
use App\Models\RegisterEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth')->except(['show','index']);
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function adminPosts()
    {
        $posts = Posts::all();
        return view('admin.posts', ['posts' => $posts]);
    }

    public function adminPublications()
    {
        $publications = Publications::all();
        return view('admin.publications', ['publications' => $publications]);
    }

    public function adminUsers()
    {
        $users = User::all();
        return view('admin.usuarios', ['users' => $users]);
    }

//    public function adminUsersEvent()
//    {
//        $usersEvent = RegisterEvent::all();
//        return view('admin.usuariosEvent', ['usersEvent' => $usersEvent]);
//    }

    public function adminRegisterEvent()
    {
        $registers_event = DB::table('register_event')->join('users', 'users.id', '=', 'register_event.users_id')->join('publications', 'publications.id', '=', 'register_event.publications_id')->select('register_event.id', 'users.name', 'users.lastnameP', 'users.lastnameM', 'publications.name as publication_name')->orderBy('publication_name', 'desc')->get();
        return view('admin.registerEvent', ['register_event' => $registers_event]);
    }

    public function adminComentarios()
    {
        $comentarios = DB::table('comentarios')->join('users', 'users.id', '=', 'comentarios.user_id')->join('publications', 'publications.id', '=', 'comentarios.publications_id')->select('comentarios.id', 'users.name', 'users.lastnameP', 'users.lastnameM', 'comentarios.comentario', 'publications.name as publication_name')->where('validacion', 0)->orderBy('id', 'asc')->get();
        return view('admin.comentarios', ['comentarios' => $comentarios]);
    }


}
