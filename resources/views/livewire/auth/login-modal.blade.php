<div>
    @if ($show)
        {{-- Passo 1: Renderiza APENAS o fundo escuro semi-transparente. --}}
        {{-- Ele fica em uma camada inferior (z-40). --}}
        <div class="fixed inset-0 bg-gray-900 z-40" style="background-color: rgba(17, 24, 39, 0.75);"></div>

        {{-- Passo 2: Renderiza o container do modal em si, que é transparente. --}}
        {{-- Ele fica em uma camada superior (z-50) e é responsável por centralizar a caixa. --}}
        <div class="fixed inset-0 flex items-center justify-center z-50" wire:click.self="close">

            {{-- A caixa branca do modal com o conteúdo --}}
            <div class="bg-white rounded-lg shadow-xl w-full max-w-md m-4">
                <div class="flex justify-end p-2">
                    <button wire:click="close" class="text-gray-500 hover:text-gray-800 text-3xl leading-none">&times;</button>
                </div>
                
                <div class="p-6 pt-0">
                    <livewire:auth.login />
                </div>
            </div>

        </div>
    @endif
</div>