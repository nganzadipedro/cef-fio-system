<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ano;
use App\Models\Candidatura;
use App\Models\Fio\Aluno;
use App\Models\Fio\Candidaturaformacao;
use App\Models\Fio\Formacao;
use Livewire\Component;

class Dashboard extends Component
{

    public $total = array();
    public $candidaturas = array();
    public $cand_pendentes = array();
    public $formacoes = array();
    public $lista_anos = array();
    
    public function render()
    {

        $this->lista_anos = \App\Models\Enoaa\Ano::all();
        $this->formacoes = Formacao::all();
        $this->cand_pendentes = Candidaturaformacao::where('estado', 'pendente')
        ->where('pintar', 'Não')->get();


  $this->total[0] = Candidaturaformacao::where('estado', 'aprovado')
        ->where('pago', 'pago')->count();

        $masc= 0;
        $fem = 0;
        foreach($this->cand_pendentes as $linha){

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

        return view('dashboard.admin.index')->extends('layouts.app')->section('conteudo');
    }
}
