<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $password_confirmation = '';

    /**
     * Regras de validação para os campos do formulário.
     */
    protected $rules = [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ];

    /**
     * Este método é executado automaticamente sempre que um campo
     * do formulário é atualizado, permitindo validação em tempo real.
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Método chamado quando o formulário é enviado.
     */
    public function submit()
    {
        $validatedData = $this->validate();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Autentica o usuário automaticamente após o registro
        auth()->login($user);

        // Dispara um evento para o navegador exibir a notificação toast
        $this->dispatch('user-registered', 'Cadastro realizado com sucesso!');

        // Aguarda 3 segundos (para dar tempo de ver o toast) e redireciona
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}