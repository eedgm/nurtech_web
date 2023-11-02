<section class="bg-white">
    <nav class="container p-6 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <div>
                <a class="text-2xl font-bold text-gray-800 lg:text-3xl hover:text-gray-700" href="#">
                    <img class="w-auto h-14" src="{{ asset('storage/logo-nurtech.png') }}" alt="" />
                </a>
            </div>
        </div>

        <div class="hidden md:flex md:justify-between md:items-center">
            <livewire:contact-form />
        </div>
    </nav>

    <div class="container flex flex-col px-6 py-5 mx-auto space-y-6 md:py-8 md:flex-row md:items-center">
        <div class="w-full md:w-1/2">
            <div class="w-full">
                <h1 class="text-3xl font-bold tracking-wide text-gray-800 lg:text-5xl">
                    Buscas soluciones para tu negocio
                </h1>

                <div class="mt-8 space-y-5">
                    <p class="flex items-center -mx-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Consultoría</span>
                    </p>

                    <p class="flex items-center -mx-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Desarrollo a su Medida</span>
                    </p>

                    <p class="flex items-center -mx-2 text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <span class="mx-2">Soporte Técnico</span>
                    </p>
                </div>
            </div>

            <div class="w-full mt-8 bg-transparent rounded-md lg:max-w-sm">
                <livewire:contact-form />
            </div>
        </div>

        <div class="flex items-center justify-center w-full lg:w-1/2">
            <div class="container w-[400px] lg:w-[500px]">
                <lottie-player autoplay loop src="{{ asset('storage/lottie/hero-nurtech.json') }}" />
            </div>
        </div>
    </div>


</section>

@push('scripts')
    <script src="{{ asset('storage/vendor/lottie-player/dist/lottie-player.js') }}"></script>
@endpush
