<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Livros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                    <form method="POST" action="{{ route('livros.store') }}">
                        @csrf
                        @method('PUT')
                        <label>ID</label>
                        <input name="id">

                        <label>Autor</label>
                        <input name="autor">

                        <label>Titulo</label>
                        <input name="titulo">

                        <label>Subtitulo</label>
                        <input name="subtitulo">

                        <label>Edição</label>
                        <input name="edição">

                        <label>Editora</label>
                        <input name="editora">

                        <label>Ano De Publicação</label>
                        <input name="ano de publicação">

                        <button>Update</button>
                        <a href="{{ route('livros.index') }}">Cacelar</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
