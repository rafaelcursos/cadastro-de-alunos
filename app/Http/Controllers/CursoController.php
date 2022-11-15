<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('/curso.home', ['cursos' => $cursos]);
    }

    public function find($id)
    {
        $curso = Curso::find($id);

        return view('/curso.info', ['curso' => $curso]);
    }

    public function create()
    {
        return view('/curso.criar');
    }

    public function store(Request $request)
    {
        $curso = new Curso();

        $curso->curso = $request->curso;
        $curso->descricao = $request->descricao;

        if($request->imagem){
            $imagem = $request->imagem;
            $imageName= $imagem->store('/', 'public');
            $curso->imagem = $imageName;
        }

        $curso->valor = $request->valor;
        $curso->duracao = $request->duracao;

        $curso->save();

        return back()->with('msg', 'Aluno cadastrado com sucesso');
    }

    public function cursoAluno($id)
    {
        $aluno = Aluno::find($id);
        $cursos = Curso::all();
        return view('/curso.curso_aluno', ['aluno' => $aluno, 'cursos' => $cursos]);
    }

    public function cursoAlunoInsert(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $curso = Curso::find($request->curso);

        $aluno->cursos()->attach($curso);

        return redirect('/dia_aluno/'. $id);
    }
}
