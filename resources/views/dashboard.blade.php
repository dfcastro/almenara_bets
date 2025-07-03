@extends('layouts.app')

@section('content')
<div style="padding: 2rem;">
    <h1>Painel de Controle</h1>
    <p style="margin-top: 1rem;">Olá, {{ auth()->user()->name }}! Bem-vindo(a) à Almenara Bets.</p>
</div>
@endsection