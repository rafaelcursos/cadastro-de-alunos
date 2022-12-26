<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Mensalidade;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function find($id)
    {
        $aluno = Aluno::find($id);
        $cursos = $aluno->cursos;
        return view('alunos.info', ['aluno' => $aluno, 'cursos' => $cursos]);
    }

    public function create()
    {
        return view('alunos.criar');
    }

    public function store(Request $request)
    {
        $aluno = new Aluno();

        $aluno->nome = $request->nome;
        $aluno->telefone = $request->telefone;
        $aluno->responsavel = $request->responsavel;
        $aluno->nascimento = $request->nascimento;
        $aluno->rua = $request->rua;
        $aluno->bairro = $request->bairro;
        $aluno->cidade = $request->cidade;
        $aluno->numero = $request->numero;
        $aluno->email = $request->email;
        $aluno->instagram = $request->instagram;

        if($request->imagem){
            $imagem = $request->imagem;
            $imageName= $imagem->store('/', 'public');
            $aluno->imagem = $imageName;
        }

        $aluno->save();

        return redirect('home')->with('aluno cadastrado com sucesso!');
    }

    public function update($id)
    {
        $aluno = Aluno::find($id);

        dd($aluno);
    }

    public function destroy($id){
        $aluno = Aluno::find($id)->delete();

        return redirect('home')->with('msg', 'aluno deletado com sucesso!');
    }

}
