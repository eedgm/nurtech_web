<x-land-layout>
    @section('title', 'Nurtech')
    <x-landing.header />

    <x-landing.section
        bg="bg-gradient-to-b from-cyan-50 to-cyan-200"
        title="Nuestros Servicios"
        description="Ofrecemos servicios a la medida de su necesidad"
    >
        <x-landing.card
            title="Consultoría"
            excerpt="Contamos con mas de 10 años de experiencia brindando consultoria y soluciones adecuadas para nuestros clientes."
            icon="bxs-cog"
            color="text-pink-500"
            content="Contamos con mas de 10 años de experiencia brindando consultoria y soluciones adecuadas para nuestros clientes."
        />

        <x-landing.card
            title="Desarrollo a su Medida"
            excerpt="Desarrollamos sistemas acorde con sus necesidades para potenciar sus ventas y funcionamiento."
            icon="bx-laptop"
            color="text-red-500"
            content="Desarrollamos sistemas acorde con sus necesidades para potenciar sus ventas y funcionamiento."
        />

        <x-landing.card
            title="Soporte Técnico"
            excerpt="Apoyamos con el servicio técnico para sus sistemas, servidores, ataques, correos electrónicos y démas."
            icon="bx-support"
            color="text-cyan-500"
            content="Apoyamos con el servicio técnico para sus sistemas, servidores, ataques, correos electrónicos y démas."
        />

    </x-landing.section>


</x-land-layout>
