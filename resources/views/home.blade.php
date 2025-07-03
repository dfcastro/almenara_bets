@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    {{-- Título da Seção --}}
    <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Jogos em Destaque</h1>

    {{-- Container para a lista de jogos --}}
    <div class="space-y-6">

        {{-- INÍCIO: Card de Jogo (Exemplo 1) --}}
        <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:-translate-y-1">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-sm text-gray-600">Brasileirão Série A</span>
                <span class="text-xs text-gray-500">Hoje, 21:30</span>
            </div>
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">Flamengo vs Corinthians</h2>
            </div>
            <div class="grid grid-cols-3 gap-4 text-center">
                {{-- Aposta Casa --}}
                <div>
                    <span class="text-xs text-gray-500">Flamengo</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">1.85</button>
                </div>
                {{-- Aposta Empate --}}
                <div>
                    <span class="text-xs text-gray-500">Empate</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">3.50</button>
                </div>
                {{-- Aposta Fora --}}
                <div>
                    <span class="text-xs text-gray-500">Corinthians</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">4.20</button>
                </div>
            </div>
        </div>
        {{-- FIM: Card de Jogo --}}

        {{-- INÍCIO: Card de Jogo (Exemplo 2) --}}
        <div class="bg-white rounded-lg shadow-lg p-6 transition-transform transform hover:-translate-y-1">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-sm text-gray-600">Premier League</span>
                <span class="text-xs text-gray-500">Amanhã, 16:00</span>
            </div>
            <div class="text-center mb-4">
                <h2 class="text-2xl font-semibold text-gray-900">Manchester United vs Liverpool</h2>
            </div>
            <div class="grid grid-cols-3 gap-4 text-center">
                <div>
                    <span class="text-xs text-gray-500">Man. United</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">2.50</button>
                </div>
                <div>
                    <span class="text-xs text-gray-500">Empate</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">3.80</button>
                </div>
                <div>
                    <span class="text-xs text-gray-500">Liverpool</span>
                    <button class="w-full bg-gray-200 hover:bg-blue-600 hover:text-white p-3 rounded-lg font-bold text-gray-800 transition duration-300">2.75</button>
                </div>
            </div>
        </div>
        {{-- FIM: Card de Jogo --}}

    </div>
</div>
@endsection