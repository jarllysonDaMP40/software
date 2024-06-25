<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <center>
                    
                    <form method="POST" action="{{ route('livros.store') }}">
                        @csrf
                        
                        <label>Autor</label><br>
                        <input class="text-black" name="autor">
                        <br>
                        <label>Titulo</label><br>
                        <input class="text-black" name="titulo">
                        <br>
                        <label>Subtitulo</label><br>
                        <input class="text-black" name="subtitulo">
                        <br>
                        <label>Edição</label><br>
                        <input class="text-black" name="edicao">
                        <br>
                        <label>Editora</label><br>
                        <input class="text-black" name="editora">
                        <br>
                        <label>Ano De Publicação</label><br>
                        <input class="text-black" name="ano_de_publicacao">
                        <br><br>
                        <button class="border">Salvar</button><br><br>
                        <a href="{{ route('livros.index') }}" class="border">Cacelar</a>
                    </form>
                </center>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
