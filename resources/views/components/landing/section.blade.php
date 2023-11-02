@props(['bg' => 'bg-white', 'title', 'description' => ''])

<section class="py-20 {{ $bg }}">
    <div class="container px-6 mx-auto md:px-12 xl:px-32">
        <div class="mb-16 text-center">
            <h2 class="mb-4 text-2xl font-bold text-center text-gray-900 md:text-4xl">{{ $title }}</h2>
            <p class="text-gray-600 lg:w-8/12 lg:mx-auto">{{ $description }}</p>
        </div>
        <div class="grid items-center grid-cols-1 gap-4 md:grid-cols-3">
            {{ $slot }}
        </div>
    </div>
</section>
