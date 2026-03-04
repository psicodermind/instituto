<x-layouts.layout>
    @guest
        <div
            class="hero min-h-full"
            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"
        >
            <div class="hero-overlay"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                    <p class="mb-5">
                        {{date("H:m:s")}}

                        Usuario conectado {{$nombre}}
                    <h2>Número generado <span class="text-3xl text-red-100  ">{{$numero}}</h2>
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    @endguest
    @auth
        <main class="lg:h-main bg-base-200
                     grid gap-6 p-6
                     grid-cols-1
                     sm:grid-cols-2
                     lg:grid-cols-3
                     items-start
                     overflow-y-auto">

            {{-- Ejemplo de tarjetas --}}
            <x-card>
                <x-slot name="label">Ver proyectos</x-slot>
                <x-slot name="img">/images/projects.png</x-slot>
                <x-slot name="title">Gestión de Proyectos</x-slot>
                <x-slot name="description">Vamos a ver un Crud con los proyectos</x-slot>
                <x-slot name="ref">{{route("projects.index")}}</x-slot>
            </x-card>
            <x-card label="Ver prouectos"
                    img="/images/projects.png"
                    title="Gestión de Proyectos"
                    description="Vamos a ver un Crud de los proyectos"
                    ref="{{route('projects.index')}}"></x-card>


        </main>
    @endauth
</x-layouts.layout>
