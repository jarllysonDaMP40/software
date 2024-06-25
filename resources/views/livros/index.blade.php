<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Livros List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                    <div>
                        <center>
                        <a href="{{ route('livros.create') }}"class="bg-cyan-500 dark:bg-cyan-700 hover:bg-cyan-600 border">Adicionar</a>
                        </center>
                    </div>
                    <center>
                    <table>
                        <thead>
                          
                            <tr class="">
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Id</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Autor</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Titulo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Subtitulo</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Edição</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Editora</th>
                                <th class="px-4 py-2 text-gray-900 dark:text-white text-center">Ano De Publicação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros as $livros)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->autor }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->titulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->subtitulo }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->edição }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->editora }}</td>
                                <td class="border px-4 py-2 text-gray-900 dark:text-white text-center">{{ Livro->anoDePublicação }}</td>
                                <td class="border px-4 py-2 text-center">

                                    <div class="flex justify-center">
                                        <a href="{{ route('livros.edit',$livro->id) }}" class="bg-violet-500">Editar</a>
                                        <button type="button" onclick="confirmDelete('{{ $livro ->id }}')" class="bg-pink-400">Delete</button>
                                    </div>
                                    
                                </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </center>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    functionconfirmDelete(id){
        alertfiy.comfirm("Confirmar.", function(e){
            if(e){
                let form = document.createElement('form')
                form.method = 'POST'
                form.action = `/livros/+{id}`
                form.innerHTML = '@csrf @method("DELETE")'
                document.body.appendChild(form)
                form.submit()
            }else{
                return false
            }
        })
       
    }
</script>