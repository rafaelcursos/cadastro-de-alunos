<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Horario;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function horarioAluno($id)
    {
        $aluno = Aluno::find($id);
        $horarios = Horario::all();
        return view('/horario.horario_aluno', ['aluno' => $aluno, 'horarios' => $horarios]);
    }

    public function horarioAlunoInsert(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $horario = $request->horario;

        $aluno->horarios()->attach($horario);

        return redirect('/home')->with('msg', 'Aluno cadastrado com sucesso');
    }
}
