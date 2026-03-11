<?php

namespace App\Http\Livewire\Revisor;

use App\Models\Candidatura;
use App\Models\Fio\Candidaturaformacao;
use App\Models\Fio\Formacao;
use App\Models\Fio\Turma;
use App\Models\Fio\Aluno;
use Livewire\Component;

class Dashboard extends Component
{
    public $total = array();
    public $candidaturas = array();
    public $cand_pendentes = array();
    public $formacoes = array();
    public $turmas = array();

    public function render()
    {

        $this->lista_anos = \App\Models\Enoaa\Ano::all();
        $this->formacoes = Formacao::all();
        $this->candidaturas = Candidaturaformacao::all();
        $this->turmas = Turma::all();
        $this->cand_pendentes = Candidaturaformacao::where('estado', 'pendente')->get();

        $this->total[0] = Candidaturaformacao::where('estado', 'aprovado')
            ->where('pago', 'pago')->count();

        $masc = 0;
        $fem = 0;
        foreach ($this->cand_pendentes as $linha) {
            if ($linha->getpessoa != null) {
                if ($linha->getPessoa->genero == 'Masculino') {
                    $masc++;
                } else {
                    $fem++;
                }
            }

        }

        $this->total[1] = $masc;
        $this->total[2] = $fem;
        $this->total[3] = Aluno::count();

        return view('dashboard.revisor.index')->extends('layouts.app')->section('conteudo');

    }
}
