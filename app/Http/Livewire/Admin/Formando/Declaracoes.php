<?php

namespace App\Http\Livewire\Admin\Formando;

use App\Models\Fio\Aluno;
use App\Models\Fio\Candidaturaformacao;
use App\Models\Fio\Emissaodeclaracao;
use App\Models\Fio\Solicitacaodocumento;
use Livewire\Component;

class Declaracoes extends Component
{

    public $lista = array();

    public function render()
    {

        $this->lista = Emissaodeclaracao::all();
        return view('dashboard.admin.formando.declaracoes')->extends('layouts.app')->section('conteudo');
    }

    public function getHashes($id_declaracao)
    {

        $res = array();
        $declaracao = Emissaodeclaracao::find($id_declaracao);
        $aluno = $declaracao->getAluno;
        if ($aluno->e_antigo != 'sim') {

            $candidatura = Candidaturaformacao::where('aluno_id', $declaracao->aluno_id)
                ->where('turma_id', $declaracao->turma_id)
                ->where('formacao_id', $declaracao->formacao_id)->first();

            $res[0] = $candidatura->hash;
            $res[1] = $declaracao->getAluno->hash;

        } else {
            $res[0] = $declaracao->getAluno->hash;
        }

        return $res;

    }
}
