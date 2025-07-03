<div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">

    {{-- INÍCIO: CÓDIGO DO LOGO 
    <div>
        <a href="/">
            {{-- O helper asset() cria o link correto para arquivos na pasta public 
            <img src="{{ asset('images/escudo.jpg') }}" alt="Logo Almenara Bets" class="mx-auto h-24 w-auto">
        </a> 
    </div>
    {{-- FIM: CÓDIGO DO LOGO --}}

    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Acessar sua Conta</h2>

    {{-- O resto do seu formulário continua igual... --}}
    <form wire:submit.prevent="login">

        {{-- CAMPO E-MAIL --}}
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail:</label>
            <input type="email" id="email" wire:model="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror">

            @error('email') <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p> @enderror
        </div>

        {{-- CAMPO SENHA --}}
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
            <input type="password" id="password" wire:model="password"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">

            @error('password') <p class="text-red-500 text-xs italic">{{ $message }}</p> @enderror
        </div>

        {{-- BOTÃO DE ENTRAR --}}
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">
                Entrar
            </button>
        </div>

    </form>
</div>