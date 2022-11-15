<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public function diaAluno($id)
    {
        $aluno = Aluno::find($id);
        $dias = Dia::all();
        return view('/dia.dia_aluno', ['aluno' => $aluno, 'dias' => $dias]);
    }

    public function diaAlunoInsert(Request $request, $id)
    {
        $aluno = Aluno::find($id);

        $dia = $request->dia;

        $aluno->dias()->attach($dia);

        return redirect('/horario_aluno/'. $id);
    }
}
