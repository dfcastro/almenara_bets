@extends('layouts.app')

@section('content')

<div style="display: flex; justify-content: center; padding-top: 4rem;">
    <div style="width: 400px;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Acessar sua Conta</h2>

        {{-- Carrega nosso componente de login do Livewire --}}
        <livewire:auth.login />

    </div>
</div>

@endsection