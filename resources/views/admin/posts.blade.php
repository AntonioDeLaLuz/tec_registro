@extends('layout.app')
@section('title')
    Gestión colaboradores
@endsection
@section('Colaboradores')
<h1 class="px-12 py-6 mt-5 text-primario text-center font-bold uppercase text-4xl ">Administración de colaboradores</h1>
    <div class="container mx-auto w-full">
        <div class="flex justify-between my-8">
            <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
            <a href="{{ route('posts.create') }}" class="uppercase font-bold bg-secundario border-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">Agregar</a>
        </div>
        <table class="w-full">
            <thead class="bg-primario ">
                <tr>
                    <th class="uppercase text-white p-2">ID</th>
                    <th class="uppercase text-white p-2">Nombre</th>
                    <th class="uppercase text-white p-2">Grado</th>
                    <th class="uppercase text-white p-2">Afiliacion</th>
                    <th class="uppercase text-white p-2">Acciones</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <td class="text-center">{{$post->id}}</td>
                <td class="text-center">{{$post->title}}</td>
                <td class="text-center">{{$post->caption}}</td>
                <td class="text-center">{{$post->author}}</td>
                <td>
                    <div class="grid grid-cols-2 place-items-center">
                        <div class="flex place-items-center bg-secundario p-2 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                              </svg>                              
                            <a href="{{ route('posts.edit',$post)}}" class="m-0 p-2 text-white font-bold">Edit</a>
                        </div>
                        {{-- <a href="" class="m-0 p-2 "></a> --}}
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <div class="flex place-items-center bg-red-500 p-2 rounded-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                  
                                <input type="submit" value="Eliminar" class="bg-red-500 cursor-pointer hover:bg-red-700 text-center p-2 text-white font-bold ">
                            </div>
                        </form>
                    </div>
                </td>
            </tr>   
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    </div>
@endsection