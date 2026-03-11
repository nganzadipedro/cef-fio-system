<?php

namespace App\Http\Livewire\Formador;

use App\Models\Fio\Alunoformacao;
use App\Models\Fio\Avaliacaoaluno;
use App\Models\Fio\Professor;
use App\Models\Fio\Professorformacao;
use App\Models\Fio\Turma;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Lancarnotas extends Component
{

    public $turma_id;
    public $formacao_id;
    public $disciplina_id;
    public $turma;
    public $com_notas;
    public $sem_notas;
    public $professor;
    public $alunos;
    public $nota1;
    public $nota2;

    public function mount($id_turma)
    {
        $this->turma_id = $id_turma;
        $this->turma = Turma::find($this->turma_id);
    }
    public function render()
    {

        $this->professor = Professor::where('pessoa_id', Auth::user()->pessoa_id)->first();
        $pf = Professorformacao::where('professor_id', $this->professor->id)->where('turma_id', $this->turma_id)->first();
        $this->disciplina_id = $pf->disciplina_id;
        $this->formacao_id = $pf->formacao_id;

        $tem_alunos = Avaliacaoaluno::where('turma_id', $this->turma_id)
            ->where('disciplina_id', $this->disciplina_id)
            ->get();

        if (count($tem_alunos) == 0) {
            $this->colocaalunos_avaliacao();
        }

        $this->alunos_turma = Alunoformacao::join('aluno', 'alunos_formacao.aluno_id', 'aluno.id')
            ->join('pessoas', 'pessoas.id', 'aluno.pessoa_id')
            ->where('alunos_formacao.turma_id', $this->turma_id)
            ->select('alunos_formacao.*')
            ->orderBy('pessoas.nome', 'asc')
            ->get();

        // $this->alunos_turma = Avaliacaoaluno::join('aluno', 'avaliacao_aluno.aluno_id', 'aluno.id')
        //     ->join('pessoas', 'pessoas.id', 'aluno.pessoa_id')
        //     ->where('avaliacao_aluno.turma_id', $this->turma_id)
        //     ->where('avaliacao_aluno.disciplina_id', $pf->disciplina_id)
        //     // ->whereNull('avaliacao_aluno.nota1')
        //     // ->whereNull('avaliacao_aluno.nota2')
        //     ->whereNull('avaliacao_aluno.notafinal')
        //     ->select('avaliacao_aluno.*')
        //     ->orderBy('pessoas.nome', 'asc')
        //     ->get();

        $this->com_notas = Avaliacaoaluno::where('turma_id', $this->turma_id)
            ->where('disciplina_id', $this->disciplina_id)
            ->whereNotNull('notafinal')
            ->count();


        $this->sem_notas = Avaliacaoaluno::where('turma_id', $this->turma_id)
            ->where('disciplina_id', $this->disciplina_id)
            ->whereNull('nota1')
            ->whereNull('notafinal')
            ->whereNull('nota2')->count();

        return view('dashboard.formador.lancar-notas')->extends('layouts.app')->section('conteudo');
    }

    public function colocaalunos_avaliacao()
    {

        $alunos = Alunoformacao::where('turma_id', $this->turma_id)->get();

        foreach ($alunos as $item) {
            $av = Avaliacaoaluno::create([
                'turma_id' => $this->turma_id,
                'disciplina_id' => $this->disciplina_id,
                'aluno_id' => $item->aluno_id,
                'formacao_id' => $item->formacao_id
            ]);
        }

    }

    public function lancar($aluno_id)
    {

        if ($this->nota1 === null) {
            $this->mensagem('Digite a primeira nota', 'warning');
        } else if ($this->nota1 < 0 || $this->nota1 > 20) {
            $this->mensagem('Inseriu uma nota inválida', 'warning');
        } else if ($this->nota2 === null) {
            $this->mensagem('Digite a segunda nota', 'warning');
        } else if ($this->nota2 < 0 || $this->nota2 > 20) {
            $this->mensagem('Inseriu uma nota inválida', 'warning');
        } else {

            $av = Avaliacaoaluno::where('aluno_id', $aluno_id)
                ->where('turma_id', $this->turma_id)
                ->where('disciplina_id', $this->disciplina_id)->first();

            // customização para multidisciplinares 
            if ($this->disciplina_id == 4) {
                $av->nota1 = $this->nota1;
                $av->nota2 = $this->nota2;
                $av->notafinal = ($this->nota1 + $this->nota2);
                $av->save();

            // customização para processo civil
            } else if ($this->disciplina_id == 2) {
                
                $nota2 = $av->nota2;
                if($av->nota2 > 20){
                    $nota2 = 20;
                }
                
                $res = ($this->nota1) + ($nota2 * 0.45);
                if($res > 20){
                    $res = 20;
                }
                
                $av->nota1 = $this->nota1;
                $av->nota2 = $nota2;
                $av->notafinal = $res;
                $av->save();
                
            } else {
                $av->nota1 = $this->nota1;
                $av->nota2 = $this->nota2;
                $av->notafinal = ($this->nota1 + $this->nota2) / 2;
                $av->save();
            }

            $this->nota1 = null;
            $this->nota2 = null;

            $this->mensagem('Salvo com sucesso', 'success');
        }

    }

    public function jatemnota($aluno_id)
    {

        $existe = Avaliacaoaluno::whereNotNull('notafinal')
            ->where('disciplina_id', $this->disciplina_id)
            ->where('turma_id', $this->turma_id)
            ->where('aluno_id', $aluno_id)->first();

        if ($existe) {
            return true;
        } else {
            return false;
        }

    }

    public function getavaliacao_aluno($aluno_id)
    {

        $existe = Avaliacaoaluno::where('disciplina_id', $this->disciplina_id)
            ->where('turma_id', $this->turma_id)
            ->where('aluno_id', $aluno_id)->first();

        if($existe){
            return $existe;
        }
        else{
            $av = Avaliacaoaluno::create([
                'turma_id' => $this->turma_id,
                'disciplina_id' => $this->disciplina_id,
                'aluno_id' => $aluno_id,
                'formacao_id' => $this->formacao_id
            ]);

            return $av;
        }

    }

    private function mensagem($msg, $icon)
    {
        $this->dispatchBrowserEvent('swal2', [
            'title' => $msg,
            'timer' => 5000,
            'icon' => $icon,
            // 'toast' => true,
            'showConfirmButton' => false,
            'timerProgressBar' => true,
            'position' => 'center'
        ]);
    }

}