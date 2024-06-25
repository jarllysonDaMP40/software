<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
   
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', compact('livros'));

        //return view('livros.index')->with('livros',$livros);
    
       // return view('livros.index',['livros'=> $livros]);
    
    
    }

    public function create()
    {
        return view('livros.adicionar');
    }

    public function store(Request $request)
    {
        /* $request->validate([
            'id'=> ['required','int','min:1'],
            'nome' => ['required','string','min:3','max:100'],
            'titulo'=> ['required','string','min:1','max:200'],
            'subtitulo' => ['required','string','min:1','max:200'],
            'edição' => ['required','int','min:1'],
            'editora' => ['required','string','min:1','max:100'],
            'ano de publicação'=>['required','int','min:4','max:4']
        ]); */

        Livro::create($request->all());

        return redirect()->route('livros.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $livro = Livro ::findOrFail($id);
        return view('livros.edit',compact('livros'));
    }

   
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id'=> ['required','int','min:1'],
            'nome' => ['required','string','min:3','max:100'],
            'titulo'=> ['required','string','min:1','max:200'],
            'subtitulo' => ['required','string','min:1','max:200'],
            'edicao' => ['required','int','min:1'],
            'editora' => ['required','string','min:1','max:100'],
            'ano_de_publicacao'=>['required','int','min:4','max:4']
        ]);

        $livro = Livro::findOrFail($id);

        $livro->update($request->all());

        return redirect()->route('livros.index');
    }

    public function destroy(string $id)
    {
        $livro=Livro::findOrFail($id);
        $livro->delete();
        return redirect()->route('livros.index');

    }
}
