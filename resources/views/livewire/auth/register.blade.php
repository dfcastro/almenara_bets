<div>
    {{-- O .prevent previne o comportamento padrão do formulário (recarregar a página)
         e chama o nosso método submit() na classe. --}}
    <form wire:submit.prevent="submit">
        
        {{-- CAMPO NOME --}}
        <div>
            <label for="name">Nome:</label>
            {{-- wire:model.live é a cola mágica que conecta este input
                 à propriedade $name na nossa classe PHP. O .live faz a
                 validação acontecer em tempo real enquanto o usuário digita. --}}
            <input type="text" id="name" wire:model.live="name">
            {{-- O @error mostra a mensagem de erro específica para este campo --}}
            @error('name') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        {{-- CAMPO E-MAIL --}}
        <div style="margin-top: 1rem;">
            <label for="email">E-mail:</label>
            <input type="email" id="email" wire:model.live="email">
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        {{-- CAMPO SENHA --}}
        <div style="margin-top: 1rem;">
            <label for="password">Senha:</label>
            <input type="password" id="password" wire:model.live="password">
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        {{-- CAMPO CONFIRMAÇÃO DE SENHA --}}
        <div style="margin-top: 1rem;">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" id="password_confirmation" wire:model.live="password_confirmation">
        </div>

        <button type="submit" style="margin-top: 1.5rem;">
            Registrar
        </button>

    </form>
</div>