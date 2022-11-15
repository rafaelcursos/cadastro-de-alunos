<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function contatos()
    {
        return $this->belongsToMany(Contato::class);
    }

    public function cursos()
    {
        return $this->belongsToMany(Curso::class);
    }

    public function mensalidades()
    {
        return $this->belongsToMany(Mensalidade::class);
    }

    public function dias()
    {
        return $this->belongsToMany(Dia::class);
    }

    public function horarios()
    {
        return $this->belongsToMany(Horario::class);
    }
}
