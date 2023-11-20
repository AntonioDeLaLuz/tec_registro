<div>   
    <div class=" py-10">
        
        
        <div class="max-w-7xl mx-auto">
            <form wire:submit.prevent='leerDatosFormulario'>
                <label 
                    class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                    for="termino">Término de Búsqueda
                </label>
                    <div class="md:grid md:grid-cols-4 justify-evenly">
                        <div class="col-span-3 gap-5">
                            <div class="">
                                <input 
                                    id="termino"
                                    type="text"
                                    wire:model="termino"
                                    placeholder="Buscar por:"
                                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-ful p-4 w-full"
                                />
                            </div>
                        </div>
            
                        <div class="flex">
                            <input 
                                type="submit"
                                class="bg-indigo-500 hover:bg-indigo-600 transition-colors  text-sm font-bold px-10  rounded cursor-pointer uppercase w-full md:w-auto text-white"
                                value="Buscar"
                            />
                        </div>
                    </div>
               
            </form>
        </div>
    </div>
</div>

