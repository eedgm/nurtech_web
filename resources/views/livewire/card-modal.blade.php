<div>
    <button
        class="{{ $buttonColor }} flex select-none items-center gap-2 rounded-lg py-2 text-center align-middle font-sans text-xs font-bold uppercase transition-all hover:underline"
        wire:click="show"
        >
        Ver más
        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            aria-hidden="true"
            class="w-4 h-4"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
            ></path>
        </svg>
    </button>
    <x-modal wire:model="showingModal">
        <div class="px-6 py-4">
            <div class="flex items-center justify-between space-x-4">
                <div class="text-lg font-bold">{{ $modalTitle }}</div>

                <button x-on:click="show = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>

            <div class="mt-5">
                {{ $modalContent }}
            </div>
        </div>
    </x-modal>
</div>
