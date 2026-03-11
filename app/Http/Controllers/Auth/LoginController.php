<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ActividadesistemaController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Lib\Traits\GeralTrait;
use App\Models\Enoaa\Pessoa;
use App\Models\Fio\Formacao;
use App\Models\Fio\Provincia;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    use GeralTrait;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $for = [
        1 => 'admin.dashboard',
        2 => 'revisor.dashboard',
        3 => 'avaliador.dashboard',
        4 => 'juri.dashboard',
        5 => 'candidato.dashboard',
        6 => 'formador.dashboard'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    protected function redirectTo()
    {
        return $this->redirectTo = route(
            $this->for[auth()->user()->permissao_id]
        );
    }

    public function login(Request $request)
    {

        $pessoa = Pessoa::where('email', $request->email)->first();
        //dd($pessoa);
        if ($pessoa) {
            $senha = md5($request->password);
            $user = User::where([
                'pessoa_id' => $pessoa->id,
                'password' => $senha,
                'ativo' => 'Sim',
                'acesso_fio' => 'Sim'
            ])->first();

            if ($user) {
                if (($user->permission_id == 5 && $user->id >= 686) || ($user->permission_id != 5)) {
                    Auth::login($user);
                    // regista actividade do sistema
                    ActividadesistemaController::inserir($user->id, 'Acessou o sistema', 'Usuário', 'conta', null);
                    return redirect()->route(
                        $this->for[auth()->user()->permission_id]
                    );
                } else {
                    $errors = new MessageBag(['error' => ['Email and/or password invalid.']]);
                    return redirect()->back()->withErrors($errors);
                }
            } else {
                $errors = new MessageBag(['error' => ['Email and/or password invalid.']]);
                return redirect()->back()->withErrors($errors);
            }
        } else {
            $errors = new MessageBag(['error' => ['Email and/or password invalid.']]);
            return redirect()->back()->withErrors($errors);
        }
    }

    public function inicio()
    {
        return View('inicio');
    }

    public function novo_inicio()
    {
        return View('novo-inicio');
    }

    public function formacao_especializada()
    {
        return View('formacao-especializada');
    }

    public function perfil_formador()
    {
        return View('perfil-formador');
    }

    public function showRegisterForm()
    {
        $formacoes = Formacao::all();
        $provincias = Provincia::where('estado', 'ativo')->get();
        return View('auth.inscricao2', compact('formacoes', 'provincias'));
    }

    public function showRegisterFormEnoaa()
    {
        $formacoes = Formacao::all();
        return View('auth.inscricao-enoaa', compact('formacoes'));
    }
}
