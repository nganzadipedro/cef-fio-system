<!DOCTYPE html>
<html lang="pt-AO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Inscrição - CEF | Acesso</title>
    <meta content="CEF-OAA" name="description" />
    <meta content="CEF-OAA" name="author" />
    <!-- link do favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/system/favicon.ico') }}">
    <link href="{{ asset('assets/system/css/login.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="stage">

        <!-- <div class="watermark" aria-hidden="true">
            <svg viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="300" y1="60" x2="300" y2="520" stroke="#f2b705" stroke-width="4" />
                <line x1="130" y1="130" x2="470" y2="130" stroke="#f2b705" stroke-width="4" />
                <circle cx="300" cy="90" r="18" stroke="#f2b705" stroke-width="4" />
                <line x1="130" y1="130" x2="80" y2="270" stroke="#f2b705" stroke-width="3" />
                <line x1="130" y1="130" x2="180" y2="270" stroke="#f2b705" stroke-width="3" />
                <path d="M50 270 Q115 340 180 270" stroke="#f2b705" stroke-width="4" />
                <line x1="470" y1="130" x2="420" y2="270" stroke="#f2b705" stroke-width="3" />
                <line x1="470" y1="130" x2="520" y2="270" stroke="#f2b705" stroke-width="3" />
                <path d="M390 270 Q455 340 520 270" stroke="#f2b705" stroke-width="4" />
                <path d="M220 520 L380 520 L360 560 L240 560 Z" stroke="#f2b705" stroke-width="4" />
                <line x1="300" y1="480" x2="300" y2="520" stroke="#f2b705" stroke-width="4" />
                <line x1="180" y1="480" x2="420" y2="480" stroke="#f2b705" stroke-width="4" />
            </svg>
        </div> -->

        <div class="brand">
            <img src="{{ asset('assets/system/logos/logo_oaa_cor.png') }}" alt="" width="100px" height="100px">
            <div class="brand-text">
                <div class="org">Ordem dos Advogados de Angola</div>
                <div class="sub">Centro de Estudos e Formação</div>
            </div>
        </div>

        <div class="panel">
            <div class="panel-top">
                <div class="bar"></div>
                <span>Plataforma de Gestão da Formação Inicial Obrigatória</span>
            </div>

            <h2>Aceda a Plataforma</h2>
            <p class="lede">Digite as suas credenciais de acesso.</p>

            @if ($errors->has('error'))
                <br>
                <br>
                <div class="error-msg" id="errorMsg">Email ou palavra-passe incorrectos. Tente novamente.</div>
            @endif

            <form id="loginForm" action="{{ route('login') }}" method="POST">

                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="nome@exemplo.co.ao" required
                        autocomplete="username">
                </div>

                <div class="field password">
                    <label for="password">Palavra-passe</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required
                        autocomplete="current-password">
                    <button type="button" class="toggle-visibility" id="toggleBtn">mostrar</button>
                </div>

                <div class="row-between">
                    <a href="#" class="forgot-link">Esqueceu a palavra-passe?</a>
                </div>

                <button type="submit" class="btn-primary">Entrar</button>
            </form>

            <div class="divider">Ainda não fez a sua inscrição?</div>

            <div class="signup-box">
                Submeta a sua candidatura.
                <br>
                <a href="{{ route('register') }}">Iniciar candidatura →</a>
            </div>
        </div>

    </div>

    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const pwd = document.getElementById('password');
        toggleBtn.addEventListener('click', () => {
            const isPwd = pwd.type === 'password';
            pwd.type = isPwd ? 'text' : 'password';
            toggleBtn.textContent = isPwd ? 'ocultar' : 'mostrar';
        });
    </script>

</body>

</html>