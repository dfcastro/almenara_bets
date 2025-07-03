<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Almenara Bets</title>

    {{-- Esta linha carrega o CSS compilado pelo Vite, incluindo o Tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

{{-- Adicionamos uma cor de fundo suave e definimos a fonte padrão de todo o site --}}

<body class="bg-gray-100 font-sans">

    {{-- NOVO CABEÇALHO PROFISSIONAL --}}
    <header class="bg-gray-800 text-white shadow-lg">
        <div class="container mx-auto px-3 py-1 flex justify-between items-center">

            {{-- Logo --}}
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/escudo.jpg') }}" alt="Logo Almenara Bets" class="h-16 w-auto">
            </a>

            {{-- Navegação --}}
            <nav>
                @guest
                    <a href="#" onclick="event.preventDefault(); Livewire.dispatch('openLoginModal')"
                        class="text-gray-300 hover:text-white px-3 py-1 rounded-md text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-300 hover:text-white px-3 py-1 rounded-md text-sm font-medium">Registrar</a>
                @endguest

                @auth
                    <a href="/dashboard"
                        class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Painel</a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                            class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sair</button>
                    </form>
                @endauth
            </nav>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    {{-- RODAPÉ PROFISSIONAL --}}
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-6 py-8">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-xl">Almenara Bets</h3>
                    <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Todos os direitos reservados.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">Sobre</a>
                    <a href="#" class="text-gray-400 hover:text-white">Termos</a>
                    <a href="#" class="text-gray-400 hover:text-white">Contato</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- FIM DO RODAPÉ --}}
    {{-- ... Sua notificação toast e scripts continuam iguais ... --}}
    <div x-data="{ show: false, message: '' }"
        x-on:user-registered.window="show = true; message = $event.detail; setTimeout(() => show = false, 3000)"
        x-show="show" x-transition
        style="position: fixed; top: 20px; right: 20px; background-color: #28a745; color: white; padding: 16px; border-radius: 8px; z-index: 1000;">
        <span x-text="message"></span>
    </div>


    <livewire:auth.login-modal /> {{-- ADICIONE ESTA LINHA --}}
    @livewireScripts

</body>



</html>