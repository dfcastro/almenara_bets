<?php

namespace App\Livewire\Auth; // Lembre-se que corrigimos para não ter o '\Http'

use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public string $password = '';

    /**
     * Regras de validação para os campos.
     */
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    /**
     * Método chamado para tentar autenticar o usuário.
     */
    public function login()
    {
        $credentials = $this->validate();

        // A mágica do Laravel: auth()->attempt()
        // Tenta fazer o login com as credenciais fornecidas.
        // Retorna 'true' se der certo, e 'false' se a senha ou e-mail estiverem errados.
        if (auth()->attempt($credentials)) {

            // Regenera a sessão para proteger contra ataques de 'session fixation'.
            request()->session()->regenerate();

            // Redireciona o usuário para o painel após o login.
            return redirect()->intended('/dashboard');
        }

        // Se o login falhar, adiciona um erro ao campo 'email'.
        $this->addError('email', 'As credenciais fornecidas não correspondem aos nossos registros.');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}