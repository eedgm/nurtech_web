@props(['title', 'excerpt', 'icon', 'color', 'content'])

<div class="relative flex flex-col w-full mt-6 text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="p-6">
        <i class="bx {{ $icon }} {{ $color }} mb-4 text-7xl"></i>
        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
            {{ $title }}
        </h5>
        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
            {{ $excerpt }}
        </p>
    </div>
    <div class="p-6 pt-0">
        <livewire:card-modal modalTitle="{{ $title }}" modalContent="{{ $content }}" buttonColor="{{ $color }}" />
        {{-- <ModalInfo title={modal_title} button="Ver más" modal_button_color={color}>
            <slot name="modal_content" />
        </ModalInfo> --}}
    </div>
</div>
