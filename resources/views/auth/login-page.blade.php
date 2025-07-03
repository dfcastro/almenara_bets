@extends('layouts.app')

@section('content')

{{-- Container principal que centraliza tudo na tela --}}
<div class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md">
        {{-- Carrega nosso componente de login do Livewire --}}
        <livewire:auth.login />
    </div>
</div>

@endsection