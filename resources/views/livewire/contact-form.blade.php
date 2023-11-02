<div>
    <div>
        <button
            wire:click="show"
            class="w-full px-5 py-2 mt-4 text-lg text-center text-white capitalize transition-colors duration-200 transform bg-blue-600 border rounded-md lg:mt-0 hover:bg-blue-800"
            >
            <span>Contacto  <i class="bx bxs-envelope"></i></span>
        </button>
    </div>

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
                <x-inputs.group class="grid grid-cols-1 gap-5 mt-5 mb-6 md:grid-cols-2">
                    <div>
                        <x-landing.inputs.text
                            name="contact.name"
                            label="Nombre Completo"
                            wire:model.defer="contact.name"
                            maxlength="255"
                            placeholder="John Doe"
                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                        ></x-landing.inputs.text>
                    </div>
                    <div>
                        <x-landing.inputs.email
                            name="contact.from"
                            label="Correo"
                            wire:model.defer="contact.from"
                            maxlength="255"
                            placeholder="you@company.com"
                        ></x-landing.inputs.email>
                    </div>
                </x-inputs.group>
                <x-inputs.group class="w-full">
                    <x-landing.inputs.text
                        name="contact.phone"
                        label="Número de teléfono"
                        wire:model.defer="contact.phone"
                        maxlength="255"
                        placeholder="+507 6123-45667"
                    ></x-landing.inputs.text>
                </x-inputs.group>
                <x-inputs.group class="w-full">
                    <x-landing.inputs.text
                        name="contact.subject"
                        label="Asunto"
                        wire:model.defer="contact.subject"
                        maxlength="255"
                        placeholder="Necesito ayuda con..."
                    ></x-landing.inputs.text>
                </x-inputs.group>
                <x-inputs.group class="w-full">
                    <x-landing.inputs.textarea
                        name="contact.body"
                        label="Su mensaje"
                        wire:model.defer="contact.body"
                    ></x-landing.inputs.textarea>
                </x-inputs.group>

                <div class="mb-6">
                    <button type="button" wire:click="send" class="w-full px-3 py-4 mt-3 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send Message</button>
                </div>
            </div>
        </div>
    </x-modal>

    <x-modal wire:model="showingModalThanks">
        <div class="px-6 py-4">
            <div class="flex items-center justify-between space-x-4">
                <div class="text-lg font-bold">{{ $modalTitleThanks }}</div>

                <button x-on:click="show = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </div>

            <div class="mt-5">
                <div class="flex flex-col items-center space-y-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h1 class="text-4xl font-bold">Gracias!</h1>
                    <p class="pb-10">Gracias por su intertes! Pronto nos pondremos en contacto.</p>

                </div>
            </div>
        </div>
    </x-modal>
</div>
