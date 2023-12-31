<div>
        <table class="w-full">
            <thead class="bg-primario ">
                <tr>
                    <th class="uppercase text-white p-2">ID</th>
                    <th class="uppercase text-white p-2">Titulo</th>
                    <th class="uppercase text-white p-2">Sub-Titulo</th>
                    <th class="uppercase text-white p-2">Acciones</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication )
            <tr>
                <td class="text-center">{{$publication->id}}</td>
                <td class="text-center">{{$publication->name}}</td>
                <td class="text-center">{{$publication->sub_title}}</td>
                <td>
                    <div class="grid grid-cols-2 place-items-center">
                        <div class="flex place-items-center bg-secundario p-2 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white font-bold">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                              </svg>                              
                            <a href="{{ route('publications.edit',$publication)}}" class="m-0 p-2 text-white font-bold">Editar</a>
                        </div>
                        <div class="flex place-items-center bg-red-500 p-2 rounded-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                              </svg>
                              <button wire:click="$emit('mostrarAlerta',{{$publication->id}})"
                                class="text-white bg-red-500 p-2 rounded-lg text-xs font-bold uppercase">Eliminar</button>
                        </div>
                    </div>
                </td>
            </tr>   
            @endforeach
        </tbody>
      
    </table>

    <div class="mt-5">
        {{ $publications->links() }}
    </div>

</div>
@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('mostrarAlerta', publication_id => {
        Swal.fire({
            title: '¿Eliminar publicación?',
            text: "Una publicación eliminada no se puede revertir",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Obtener el formulario de eliminación y enviarlo
                const form = document.createElement('form');
                form.action = "{{ url('publications') }}/" + publication_id;
                form.method = 'POST';
                form.innerHTML = `
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="Eliminar" style="display: none;">
                    `;

                document.body.appendChild(form);
                form.submit();

                Swal.fire(
                    'Se ha Eliminado la publicación',
                    'Eliminado correctamente',
                    'success'
                );
            }
        });
    });
</script>
@endpush
