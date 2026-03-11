<?php

namespace App\Http\Livewire\Admin\Usuarios;

use App\Models\Ano;
use App\Models\Enoaa\Pessoa;
use App\Models\User;
use Livewire\Component;

class Candidatos extends Component
{

    public $usuarios = array();
    public $homens;
    public $mulheres;

    public function render()
    {

        // $ano = Ano::where('estado', 'Activo')->first();
        $this->usuarios = User::
            where('permission_id', 5)
            ->whereNull('deleted_at')
            ->get();

        $this->homens = 0;
        $this->mulheres = 0;

        //dd($this->usuarios);

        foreach ($this->usuarios as $item) {
            if ($this->eliminado($item->pessoa_id) != 'false') {
                if ($item->getPessoa->genero == 'Masculino') {
                    $this->homens++;
                } else {
                    $this->mulheres++;
                }
            }

        }

        return view('dashboard.admin.usuarios.listar-candidatos')->extends('layouts.app')->section('conteudo');
    }

    public function eliminado($id){

        $pes = Pessoa::find($id);
        if($pes){
            return 'true';
        }
        else{
            return 'false';
        }

    }
}
