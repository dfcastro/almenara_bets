<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Almenara Bets</title>
    @livewireStyles
</head>

<body>
    {{-- INÍCIO DA BARRA DE NAVEGAÇÃO --}}
    <nav style="background-color: #f3f4f6; padding: 1rem; text-align: right;">
        @guest
            {{-- Se o usuário for um 'convidado' (não logado), mostra estes links --}}
            <a href="{{ route('login') }}" style="margin-left: 1rem;">Login</a>
            <a href="{{ route('register') }}" style="margin-left: 1rem;">Registrar</a>
        @endguest

        @auth
            {{-- Se o usuário estiver 'autenticado' (logado), mostra estes --}}
            <a href="/dashboard" style="margin-left: 1rem;">Painel</a>

            {{-- O formulário de logout que já corrigimos --}}
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit">Sair</button>
            </form>
        @endauth
    </nav>
    {{-- FIM DA BARRA DE NAVEGAÇÃO --}}

    <main>
        @yield('content')
    </main>

    {{-- Estrutura da notificação Toast (inicialmente escondida) --}}
    <div x-data="{ show: false, message: '' }"
        x-on:user-registered.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
        x-show="show" x-transition
        style="position: fixed; top: 20px; right: 20px; background-color: #28a745; color: white; padding: 16px; border-radius: 8px; z-index: 1000;">
        <span x-text="message"></span>
    </div>

    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>