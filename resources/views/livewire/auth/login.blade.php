<div>
    <form wire:submit.prevent="login">

        {{-- CAMPO E-MAIL --}}
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" wire:model="email">
            {{-- O @error mostrará tanto erros de validação quanto o erro de login incorreto --}}
            @error('email') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        {{-- CAMPO SENHA --}}
        <div style="margin-top: 1rem;">
            <label for="password">Senha:</label>
            <input type="password" id="password" wire:model="password">
            @error('password') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="margin-top: 1.5rem;">
            Entrar
        </button>

    </form>
</div>