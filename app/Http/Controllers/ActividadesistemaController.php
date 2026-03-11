<?php

namespace App\Http\Controllers;

use App\Lib\Repositories\InscricaoRepository;
use App\Models\Curso;
use App\Models\Inscricao;
use App\Models\Turma;
use Illuminate\Http\Request;
use App\Lib\Traits\GeralTrait;
use App\Lib\Traits\UserTrait;
use App\Models\Fio\Actividadesistema;
use App\Models\CursoInscricao;
use App\Models\Pessoa;

class ActividadesistemaController extends Controller
{
    public static function inserir($user=null, $operacao, $origem, $destino = null, $destino_id = null)
    {

        $actividade = Actividadesistema::create([
            'user_id' => $user,
            'operacao' => $operacao,
            'origem' => $origem,
            'destino' => $destino,
            'destino_id' => $destino_id
        ]);

        return $actividade;

    }
}
