<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{

    public function mailRegisto($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Bem-Vindo à Formação Inicial Obrigatória | 2026</h2>
        <hr>
        <p>
        Exmo(a). Senhor(a) $nome, <br><br><br>
        Informamos que o seu processo de inscrição para a Formação inicial Obrigatória foi submetido com sucesso e encontra-se pendente para 
        validação pelo Centro de Estudos e Formação da Ordem dos Advogados de Angola (CEF-OAA).<br><br>
        Após a validação do seu processo, ser-lhe-á enviado um Número de Referência para efectuar o pagamento da taxa de inscrição no valor de 
        AOA 70 000,00 (Setenta mil kwanzas), por meio de caixa de pagamento automático (Multicaixa) ou sistema internet banking.<br><br>
        Após a recepção da referência, caso não efectue o pagamento no prazo de 72 horas, o seu processo de inscrição será invalidado. Após a 
        confirmação do pagamento, o seu processo de inscrição será concluído.<br><br>
        Certifique-se de que as informações prestadas e os documentos submetidos são verdadeiros. A falta da veracidade dos mesmos, não dá 
        direito ao reembolso da taxa de inscrição.<br><br>
        Para mais informações sobre fases subsequentes da FIO , a hora e o local em que será realizada a formação, recomendamos que consulte 
        permanentemente o site do do CEF-OAA (www.cef-oaa.org) e mantenha-se atento ao endereço electrónico fornecido no acto de inscrição.<br><br>
        </p>
        <hr>
        <p>
        OBS: NÃO RESPONDA ESTE EMAIL.<br><br>
        Atenciosamente, <br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>       
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "FIO - 2026 | Inscrição",
            "html" => $mensagem,
            "category" => "Inscrição - FIO - 2026"
        ];

        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);
        
        $response = json_decode($response);
        //return $response->success;

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
    }

    public function convite_turma($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Seja bem-vindo à FORMAÇÃO INICIAL OBRIGATÓRIA</h2>
        <hr>
        <p>
        Prezado(a) Formando(a) $nome;<br><br><br>
        Cumpre-nos informar que o início do 35º Curso da Formação Inicial Obrigatória está previsto para o dia 17 de Novembro de 2025 (Segunda-feira), às 17h00, na Mediateca de Luanda.<br><br>
        Contamos com a sua pontual presença.<br><br> 
        Com os melhores cumprimentos,<br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.inscricao.enoaa@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "Início do 35.º Curso de Formação Inicial Obrigatória",
            "html" => $mensagem,
            "category" => "FIO - 2025"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        return $response;
        if ($response == "") {
            return true;
        } else {
            return false;
        }
    }
    
    public function mailPagamento($email, $nome, $password)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Formação Inicial Obrigatória | Confirmação de Pagamento</h2>
        <hr>
        <p>
            Exmo(a). Senhor(a) $nome, <br><br><br>
            Servimo-nos do presente para informar que o pagamento da taxa de inscrição foi efecuado com sucesso, estando assim concluído o 
            seu processo de inscrição para realização da Formação Inicial Obrigatória.<br><br>
            Para que esteja informado sobre as etapas subsequentes da FIO e saber a hora e o local em que fará a Formação Inicial Obrigatória, 
            recomendamos que consulte permanentemente o site do Centro de Estudos e Formação da Ordem dos Advogados de 
            Angola (www.cef-oaa.org) e mantenha-se atento ao endereço electrónico fornecido no acto de inscrição.<br><br>
            Para que tenha acesso à plataforma de formações, abaixo encontre as credenciais e o link para aceder à referida plataforma:<br><br>
            <strong>Email: </strong> $email <br>
            <strong>Senha: </strong> $password <br>
            Link de acceso à: <a href='https://fio.cef-oaa.org/login'>Plataforma de Gestão da Formação Inicial Obrigatória</a>. <br>
        </p>
        <hr>
        <p>
        OBS: NÃO RESPONDA ESTE EMAIL.<br><br>
        Atenciosamente, <br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>        
        ";


        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "FIO - 2026 | Confirmação de Pagamento",
            "html" => $mensagem,
            "category" => "Pagamentos - FIO - 2026"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        if ($response == "") {
            return true;
        } else {
            return false;
        }
    }

    public function mailCredenciais($email, $nome, $password, $turma, $formacao)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Formação Inicial Obrigatória | Credenciais de Acesso a Plataforma</h2>
        <hr>
        <p>
            Exmo(a). Senhor(a) $nome, <br><br><br>
            Servimo-nos do presente para informar que a sua inscrição foi validada e que foi inserido(a) na seguinte turma:<br><br>
            Turma: $turma.<br>
            Formação: $formacao.<br><br>
            Para que tenha acesso à plataforma de formações, abaixo encontre as credenciais e o link para aceder à referida plataforma:<br><br>
            <strong>Email: </strong> $email <br>
            <strong>Senha: </strong> $password <br>
            Link de acceso à: <a href='https://fio.cef-oaa.org/login'>Plataforma de Formações</a>. <br>
        </p>
        <hr>
        <p>
        OBS: NÃO RESPONDA ESTE EMAIL.<br><br>
        Atenciosamente, <br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>        
        ";


        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "FIO - 2026 | Credenciais",
            "html" => $mensagem,
            "category" => "Credenciais - FIO - 2026"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }

    }

    public function mailCredenciais2($email, $nome, $password)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Formação Inicial Obrigatória | Credenciais de Acesso a Plataforma</h2>
        <hr>
        <p>
            Exmo(a). Senhor(a) $nome, <br><br><br>
            Para que tenha acesso à plataforma de formações, abaixo encontre as credenciais e o link para aceder à referida plataforma:<br><br>
            <strong>Email: </strong> $email <br>
            <strong>Senha: </strong> $password <br>
            Link de acceso à: <a href='https://fio.cef-oaa.org/login'>Plataforma de Formações</a>. <br>
        </p>
        <hr>
        <p>
        OBS: NÃO RESPONDA ESTE EMAIL.<br><br>
        Atenciosamente, <br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>        
        ";


        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "FIO - 2026 | Credenciais",
            "html" => $mensagem,
            "category" => "Credenciais - FIO - 2026"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }

    }

    public function mailUsuario($email, $nome, $telefone, $num_bi, $password)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Plataforma de Gestão de Formações | Credenciais de Acesso</h2>
        <hr>
        <p>
        $nome, o seu email foi cadastrado na Plataforma de Gestão de Formações. <br> <br>
        Agora poderás de forma fácil efectuar diversas operações que estão disponíveis na nossa plataforma de acordo ao teu nível de acesso.<br><br>
        O seu cadastro foi feito com as seguintes principais informações:<br> <br>
        <strong>Nome: </strong> $nome <br>
        <strong>Email: </strong> $email <br>
        <strong>Telefone: </strong> $telefone <br>
        <strong>Nº BI: </strong> $num_bi <br><br>
        Para que tenhas acesso a nossa plataforma, a seguir tens os teus dados de acesso e o link para aceder:<br> <br>
        </p>
        <p>
        Link de acceso: <a href='https://fio.cef-oaa.org/login'>Plataforma de Gestão das Formações</a>. <br>
        Queira, por favor, usar as credenciais de acesso que se seguem:<br>
        <strong>Email: </strong> $email <br>
        <strong>Password: </strong> $password <br> <br>
        </p>
        <hr>
        <p>
        Se alguma coisa não estiver a funcionar, ou em caso de dúvidas e esclarecimentos, não hesite em nos contactar.
        <br><br>
        OBS: NÃO RESPONDA ESTE EMAIL.<br><br>
        Atenciosamente, <br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>       
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "FIO - 2026 | Credenciais",
            "html" => $mensagem,
            "category" => "Credenciais - FIO - 2026"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
        
    }

    public function aberturaTurmaA($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Sejam bem-vindo(a)s à FORMAÇÃO INICIAL OBRIGATÓRIA</h2>
        <hr>
        <p>
        Prezado(a)s Formando(a)s;<br><br>
        Cumpre-nos informar que está prevista para o dia 11/05/2026, Segunda-feira, amanhã às 17:00 o início da formação, nas instalações da Mediateca de Luanda.<br><br>
        O primeiro módulo será o de Práticas Júridicas multidisciplinares.Mais informa que teremos um grupo do WhatsApp para partilha de informações diárias.<br><br> 
        Clique no link para aceder ao grupo: <a href='https://chat.whatsapp.com/LlxRNq3JcKuEXB4PnNITfk?mode=gi_t'>https://chat.whatsapp.com/LlxRNq3JcKuEXB4PnNITfk?mode=gi_t</a><br><br>
        Melhores cumprimentos<br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "TURMA A | FIO - 36º CICLO - 2026",
            "html" => $mensagem,
            "category" => "TURMA A"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
    }

    public function aberturaTurmaB($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Sejam bem-vindo(a)s à FORMAÇÃO INICIAL OBRIGATÓRIA</h2>
        <hr>
        <p>
        Prezado(a)s Formando(a)s;<br><br>
        Cumpre-nos informar que V. Exas. integram a Turma B da Universidade Óscar Ribas.<br><br>
        Informamos, igualmente, que brevemente será comunicada a data de início das aulas e demais informações académicas relevantes.<br><br>
        Para efeitos de comunicação diária e partilha de informações importantes, foi criado um grupo de WhatsApp, ao qual poderão aderir através do seguinte link:<br>
        <a href='https://chat.whatsapp.com/FH1Q4JnvHSF1NUVU2sh1wF?mode=gi_t'>https://chat.whatsapp.com/FH1Q4JnvHSF1NUVU2sh1wF?mode=gi_t</a><br><br>
        Melhores cumprimentos<br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "TURMA B | FIO - 36º CICLO - 2026",
            "html" => $mensagem,
            "category" => "TURMA B"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
    }

    public function aberturaTurmaC($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Sejam bem-vindo(a)s à FORMAÇÃO INICIAL OBRIGATÓRIA</h2>
        <hr>
        <p>
        Prezado(a)s Formando(a)s;<br><br>
        Cumpre-nos informar que V. Exas. integram a Turma C da Universidade Óscar Ribas.<br><br>
        Informamos, igualmente, que brevemente será comunicada a data de início das aulas e demais informações académicas relevantes.<br><br>
        Para efeitos de comunicação diária e partilha de informações importantes, foi criado um grupo de WhatsApp, ao qual poderão aderir através do seguinte link:<br>
        <a href='https://chat.whatsapp.com/LTw2RuP8x0ALyHi4VOciJg?mode=gi_t'>https://chat.whatsapp.com/LTw2RuP8x0ALyHi4VOciJg?mode=gi_t</a><br><br>
        Melhores cumprimentos<br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "TURMA C | FIO - 36º CICLO - 2026",
            "html" => $mensagem,
            "category" => "TURMA C"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
    }

     public function aberturaTurmaD($email, $nome)
    {

        // mensagem do email
        $mensagem = "
        <h2 style='color: #2F5496; font-weight: bold;'>Sejam bem-vindo(a)s à FORMAÇÃO INICIAL OBRIGATÓRIA</h2>
        <hr>
        <p>
        Prezado(a)s Formando(a)s;<br><br>
        Cumpre-nos informar que V. Exas. integram a Turma D.<br><br>
        Informamos, igualmente, que brevemente será comunicada a data de início das aulas e demais informações académicas relevantes.<br><br>
        Para efeitos de comunicação diária e partilha de informações importantes, foi criado um grupo de WhatsApp, ao qual poderão aderir através do seguinte link:<br>
        <a href='https://chat.whatsapp.com/ID6Phcsxxpq9V6YK65FRcG?mode=gi_t'>https://chat.whatsapp.com/ID6Phcsxxpq9V6YK65FRcG?mode=gi_t</a><br><br>
        Melhores cumprimentos<br><br>
        CEF-OAA<br>
        CEF-OAA | Urbanização Nova Vida, Rua 69, Casa n.º 7164, Kilamba Kiaxi, Luanda, Angola<br>
        Tel.: +244924956 037 | +244 935542465<br>
        E-mail:geral@cef-oaa.org | www.cef-oaa.org
        </p>
        ";

        $dados_email = [
            "from" => [
                "email" => "suporte.tecnico@cef-oaa.org",
                "name" => "CEF - OAA"
            ],
            "to" => [
                [
                    "email" => $email,
                    "name" => $nome
                ]
            ],

            "subject" => "TURMA D | FIO - 36º CICLO - 2026",
            "html" => $mensagem,
            "category" => "TURMA D"
        ];


        $data = json_encode($dados_email);
        $curl = curl_init();

        $httpHeader = [
            "Authorization: " . "Bearer d8a3c218f7efb6be2f3c11797af2e60e",
            "Content-Type: application/json",
        ];

        $opts = [
            CURLOPT_URL => "https://send.api.mailtrap.io/api/send",
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTPHEADER => $httpHeader,
            CURLOPT_POSTFIELDS => $data
        ];

        curl_setopt_array($curl, $opts);

        $response = curl_exec($curl);

        $err = curl_error($curl);
        curl_close($curl);

        $response = json_decode($response);

        if ($response->success == true) {
            return true;
        } else {
            return false;
        }
    }

}