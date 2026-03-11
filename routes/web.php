<?php

use Illuminate\Support\Facades\{
    Auth,
    Route
};

use App\Http\Livewire\Candidato\Dashboard as CandidatoDashboard;

Route::get('/', function () {
    return redirect('/inicio');
});

Route::group(['middleware' => 'guest'], function () {

    Route::get('inicio', 'Controllers\Auth\LoginController@inicio')->name('inicio');
    Route::get('formacoes', 'Controllers\Auth\LoginController@novo_inicio')->name('novo_inicio');
    Route::get('formacao-especializada', 'Controllers\Auth\LoginController@formacao_especializada')->name('form_espec');
    Route::get('perfil-formador', 'Controllers\Auth\LoginController@perfil_formador')->name('perfil_formador');
    Route::post('login', 'Controllers\Auth\LoginController@login')->name('login');
    Route::get('login', 'Controllers\Auth\LoginController@showLoginForm')->name('login');
    Route::get('candidatura', 'Controllers\Auth\LoginController@showRegisterForm')->name('register');
    Route::get('candidatura/enoaa', 'Controllers\Auth\LoginController@showRegisterFormEnoaa')->name('register.enoaa');
    Route::get('referencias',  'Controllers\UserController@referencias_espec');
    Route::get('unica-referencia/{id}',  'Controllers\UserController@unica_referencia');
    Route::get('credenciais/{id}',  'Controllers\UserController@eliminaduplicado');
    Route::get('mensagens',  'Controllers\UserController@sendMessage');
    Route::get('email',  'Controllers\UserController@sendMail');
    Route::get('pagou/{id}',  'Controllers\UserController@transformar_pago');
    Route::get('notas', 'Controllers\UserController@verifica_codigos_repetidos');
    Route::get('trata-dados', 'Controllers\UserController@carregapauta_antiga');
    Route::post('registerCandidato', 'Controllers\CandidaturaController@store');
    Route::post('registerCandidatoEnoaa', 'Controllers\CandidaturaController@storeEnoaa');
    Route::post('validacaoCandidatoEnoaa', 'Controllers\CandidaturaController@validaStoreEnoaa');
    Route::get('emitir-declaracao/{id}', 'Controllers\CandidatoController@declaracao');
    Route::get('avaliacao/{id}', 'Controllers\UserController@avaliacao');
    Route::post('gettimeexam/{id}', 'Controllers\Provacontroller@gettimeexam');
    Route::get('provaonline/{hash}', 'Livewire\Candidato\Provalink');

    // rotas de busca de informação
    Route::get('getTurmasByFormacao/{id}', 'Controllers\FormacaoController@getTurmasByFormacao');
    Route::get('getVagasByTurma/{id}/{prov_formacao}/{prov_residencia}', 'Controllers\FormacaoController@getVagasByTurma');

    Route::get('/forgot-password', 'Controllers\Auth\ForgotPasswordController@getEmail')->name('getfpview');
    Route::post('/forgot-password', 'Controllers\Auth\ForgotPasswordController@postEmail')->name('postfp');
    Route::get('/reset-password/{token}', 'Controllers\Auth\ResetPasswordController@getPassword')->name('getrspview');
    Route::post('/reset-password', 'Controllers\Auth\ResetPasswordController@updatePassword')->name('postrsp');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('logout', 'Controllers\Auth\LoginController@logout')->name('logout');
    Route::get('/reports', 'Report\ReportController@displayReport');
    Route::post('/printReport', 'Report\ReportController@printReport');

    Route::get('/perfil', 'Controllers\UserController@perfil')->name('perfil');
    Route::post('/alterar/senha', 'Controllers\UserController@updateSenha');
    Route::post('/alterar/foto', 'Controllers\UserController@updateFoto');
    Route::post('/enviar/referencias', 'Controllers\FormacaoController@enviar_referencias');
    Route::get('/actvidades-sistema', 'Livewire\Geral\Actividadesistema')->name('actividades');
    Route::get('/ver-candidatura/{hash}', 'Livewire\Geral\Vercandidatura')->name('vercandidatura');
    Route::get('/ver-documento/{id}/{tipo}', 'Controllers\PainelCandidatoController@verDocumentos')->name('verdocumento');
    Route::get('/exportar-lista/{id}', 'Controllers\FormacaoController@exportarListaTurma')->name('exportarlista');
    Route::get('/visualizar/mini-pauta/{discip}/{turma}/{prof}', 'Controllers\FormacaoController@mini_pauta')->name('mini_pauta');
    Route::get('/visualizar/mini-pauta-turma/{turma}', 'Controllers\FormacaoController@mini_pauta_turma')->name('mini_pauta_turma');
    Route::get('/emitir-declaracao/{cand}/{aluno}', 'Controllers\FormacaoController@declaracao')->name('emitirdec');
   
    Route::post('/updateCandidatura', 'Controllers\CandidatoController@updateCandidatura')->name('updateCandidatura');


    Route::prefix('provas')->name('provas.')->group(function () {
        Route::get('/cadastrar', 'Livewire\Geral\Provas\Cadastrar')->name('cadastrar');
        Route::get('/listar', 'Livewire\Geral\Provas\Listarprovas')->name('listar');
        Route::get('/editar/{hash}', 'Livewire\Geral\Provas\Editarprova')->name('editar');
        Route::get('/perguntas/{hash}', 'Livewire\Geral\Provas\Gerenciar')->name('gerenciar');
        Route::get('/alunos/{hash}', 'Livewire\Geral\Provas\Atribuiralunos')->name('alunos');
        Route::post('/pergunta/cadastrar', 'Controllers\FormacaoController@cadastrarPergunta');
    });

    Route::prefix('candidaturas')->name('candidaturas.')->group(function () {
        Route::get('/pendentes/{tipo}', 'Livewire\Geral\Pendentes')->name('pendentes');
        Route::get('/suspensas', 'Livewire\Geral\Suspensas')->name('suspensas');
        Route::get('/destacadas', 'Livewire\Geral\Destacadas')->name('destacadas');
        Route::get('/pagas', 'Livewire\Geral\Pagas')->name('pagas');
        Route::get('/todas/{ano}', 'Livewire\Geral\Todascandidaturas')->name('todas');
        Route::get('/aprovadas', 'Livewire\Geral\Aprovadas')->name('aprovadas');
        Route::get('/nova-referencia', 'Livewire\Geral\Novareferencia')->name('nova.referencia');
        Route::get('/mudanca-domicilio', 'Livewire\Geral\Mudardomicilio')->name('novo.domicilio');
        Route::get('/actualizar-dados/{aluno_hash}', 'Controllers\UserController@actualizar')->name('actualizar');
    });


    Route::group(['middleware' => 'admin'], function () {
        Route::prefix('painel-admin')->name('admin.')->group(function () {
            Route::get('/', function () {
                return redirect('/painel-admin/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Admin\Dashboard')->name('dashboard');

            Route::prefix('formacoes')->name('formacoes.')->group(function () {
                Route::get('/cadastrar', 'Livewire\Admin\Formacao\Cadastrar')->name('cadastrar');
                Route::get('/disciplinas', 'Livewire\Admin\Formacao\Disciplinas')->name('disciplinas');
                Route::get('/gerenciar/{hash}', 'Livewire\Admin\Formacao\Gerenciar')->name('gerenciar');
            });

            Route::prefix('formandos')->name('formandos.')->group(function () {
                Route::get('/ver-turma/{id_turma}', 'Livewire\Admin\Formando\Verturma')->name('verturma');
                Route::get('/listar', 'Livewire\Admin\Formando\Listar')->name('listar');
                Route::get('/turmas', 'Livewire\Admin\Formando\Turmas')->name('turmas');
                Route::get('/trocar-turma', 'Livewire\Admin\Formando\Trocarturma')->name('trocarturma');
                Route::get('/antigos', 'Livewire\Revisor\Formandosantigos')->name('antigos');
                Route::get('/antigos/actualizar/{hash}', 'Livewire\Revisor\Antigosactualizar')->name('antigos_actualizar');
                Route::get('/antigos/emitir-declaracao/{hash}', 'Livewire\Revisor\Antigosemitir')->name('antigos_emitir');
                Route::get('/declaracoes', 'Livewire\Admin\Formando\Declaracoes')->name('declaracoes');
                Route::get('/emitir-declaracao', 'Livewire\Admin\Formando\Emitirdeclaracao')->name('emitirdeclaracao');
                Route::get('/validar-declaracao', 'Livewire\Admin\Formando\Validardeclaracao')->name('validardeclaracao');
            
            });

            Route::prefix('usuarios')->name('usuarios.')->group(function () {
                Route::get('/cadastrar', 'Livewire\Admin\Usuarios\Cadastrar')->name('cadastrar');
                Route::get('/listar', 'Livewire\Admin\Usuarios\Listar')->name('listar');
                Route::get('/candidatos', 'Livewire\Admin\Usuarios\Candidatos')->name('candidatos');
                Route::get('/editar/{hash}', 'Livewire\Admin\Usuarios\Editar')->name('editar');
            });

            Route::prefix('relatorios')->name('relatorios.')->group(function () {
                Route::get('/', 'Controllers\AdminSistemaController@relatorios')->name('index');
                Route::post('/gerar-relatorio', 'Controllers\AdminSistemaController@gerar_relatorio')->name('relatorio');
                Route::post('/resultados-exames', 'Controllers\AdminSistemaController@gerar_resultado_exame')->name('resultado_exame');
            });

        });
    });

    Route::group(['middleware' => 'juri'], function () {
        Route::prefix('painel-juri')->name('juri.')->group(function () {
            Route::get('/', function () {
                return redirect('/juri/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Juri\Dashboard')->name('dashboard');

            Route::prefix('perguntas')->name('perguntas.')->group(function () {
                Route::get('/cadastrar', 'Livewire\Juri\Perguntas\Cadastrar')->name('cadastrar');
                Route::get('/corrigidos', 'Livewire\Juri\Examescorrigidos')->name('corrigidos');
                Route::get('/gerar-folhas', 'Livewire\Juri\Gerarfolhas')->name('gerar_folhas');
            });

            Route::prefix('relatorios')->name('relatorios.')->group(function () {
                Route::get('/', 'Controllers\AdminSistemaController@relatorios')->name('index');
                Route::post('/gerar-relatorio', 'Controllers\AdminSistemaController@gerar_relatorio')->name('relatorio');
                Route::post('/resultados-exames', 'Controllers\AdminSistemaController@gerar_resultado_exame')->name('resultado_exame');
            });

        });
    });

    Route::group(['middleware' => 'candidato'], function () {
        Route::prefix('painel-candidato')->name('candidato.')->group(function () {
            Route::get('/', function () {
                return redirect('/painel-candidato/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Candidato\Dashboard')->name('dashboard');
            Route::get('/minhas-formacoes', 'Livewire\Candidato\Candidaturas')->name('minhasformacoes');
            Route::get('/provas', 'Livewire\Candidato\Provas')->name('provas');
            Route::get('/realizacao-prova/{hash}/{hash2}', 'Livewire\Candidato\Fazerprova')->name('fazerprova');
            Route::get('/editar-candidatura/{hash}', 'Controllers\PainelCandidatoController@getFormularioEditar')->name('editarcandidatura');
            Route::post('/updateCandidatura', 'Controllers\CandidatoController@updateCandidatura')->name('updateCandidatura');
            Route::get('/formacoes', 'Livewire\Revisor\Formacoes')->name('formacoes');
        });
    });

    Route::group(['middleware' => 'revisor'], function () {
        Route::prefix('painel-revisor')->name('revisor.')->group(function () {
            Route::get('/', function () {
                return redirect('/painel-revisor/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Revisor\Dashboard')->name('dashboard');
            Route::get('/formacoes', 'Livewire\Revisor\Formacoes')->name('formacoes');
            Route::get('/emitir-declaracao/formando-antigo/{aluno}', 'Controllers\FormacaoController@declaracao_antigo')->name('emitirdec_antigo');
            // Route::get('/cadastrar', 'Livewire\Admin\Usuarios\Cadastrar')->name('cadastrar');

            Route::prefix('formandos')->name('formandos.')->group(function () {
                Route::get('/antigos', 'Livewire\Revisor\Formandosantigos')->name('antigos');
                Route::get('/antigos/actualizar/{hash}', 'Livewire\Revisor\Antigosactualizar')->name('antigos_actualizar');
                Route::get('/antigos/emitir-declaracao/{hash}', 'Livewire\Revisor\Antigosemitir')->name('antigos_emitir');
                Route::get('/ver-turma/{id_turma}', 'Livewire\Admin\Formando\Verturma')->name('verturma');
                Route::get('/listar', 'Livewire\Admin\Formando\Listar')->name('listar');
                Route::get('/declaracoes', 'Livewire\Admin\Formando\Declaracoes')->name('declaracoes');
                Route::get('/turmas', 'Livewire\Admin\Formando\Turmas')->name('turmas');
                Route::get('/trocar-turma', 'Livewire\Admin\Formando\Trocarturma')->name('trocarturma');
                Route::get('/emitir-declaracao', 'Livewire\Admin\Formando\Emitirdeclaracao')->name('emitirdeclaracao');
                Route::get('/validar-declaracao', 'Livewire\Admin\Formando\Validardeclaracao')->name('validardeclaracao');

            });

            
            Route::prefix('usuarios')->name('usuarios.')->group(function () {
                Route::get('/cadastrar', 'Livewire\Admin\Usuarios\Cadastrar')->name('cadastrar');
                Route::get('/listar', 'Livewire\Admin\Usuarios\Listar')->name('listar');
                Route::get('/candidatos', 'Livewire\Admin\Usuarios\Candidatos')->name('candidatos');
                Route::get('/editar/{hash}', 'Livewire\Admin\Usuarios\Editar')->name('editar');
            });
        });
    });

    Route::group(['middleware' => 'formador'], function () {
        Route::prefix('painel-formador')->name('formador.')->group(function () {
            Route::get('/', function () {
                return redirect('/painel-formador/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Formador\Dashboard')->name('dashboard');
            Route::get('/ver-turma/{id_turma}', 'Livewire\Admin\Formando\Verturma')->name('verturma');
            Route::get('/lancar-notas/{id_turma}', 'Livewire\Formador\Lancarnotas')->name('lancarnota');
        });
    });

    Route::group(['middleware' => 'avaliador'], function () {
        Route::prefix('painel-avaliador')->name('avaliador.')->group(function () {
            Route::get('/', function () {
                return redirect('/painel-avaliador/dashboard');
            });

            Route::get('/dashboard', 'Livewire\Avaliador\Dashboard')->name('dashboard');

            Route::prefix('formandos')->name('formandos.')->group(function () {
          
                Route::get('/listar', 'Livewire\Admin\Formando\Listar')->name('listar');
                Route::get('/declaracoes', 'Livewire\Admin\Formando\Declaracoes')->name('declaracoes');
                Route::get('/validar-declaracao', 'Livewire\Admin\Formando\Validardeclaracao')->name('validardeclaracao');

            });
        });
    });



});
