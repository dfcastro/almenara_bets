{{-- 1. Estende o layout que está em resources/views/layouts/app.blade.php --}}
@extends('layouts.app')

{{-- 2. Define o início de uma seção de conteúdo --}}
@section('content')

<div style="display: flex; justify-content: center; padding-top: 4rem;">
    <div style="width: 400px;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Crie sua Conta na Almenara Bets</h2>

        <livewire:auth.register />

    </div>
</div>

@endsection
{{-- 3. Define o fim da seção --}}