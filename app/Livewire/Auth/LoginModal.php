<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\On; // Importante: Importar o atributo 'On'

class LoginModal extends Component
{
    public bool $show = false;

    // O atributo #[On('...')] é a forma moderna no Livewire 3 de "escutar" um evento.
    // Quando o evento 'openLoginModal' for disparado, o método show() será executado.
    #[On('openLoginModal')]
    public function show()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function render()
    {
        return view('livewire.auth.login-modal');
    }
}