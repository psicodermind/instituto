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
            <main class="lg:h-mainbg-base-200
                     grid gap-6 p-6
                     grid-cols-1
                     sm:grid-cols-2
                     lg:grid-cols-3
                     items-start
                     overflow-y-auto">

                {{-- Ejemplo de tarjetas --}}
                <div class="card bg-base-100  w-96 shadow-sm">
                    <figure>
                        <img
                            src="{{asset("/images/projects.png")}}"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title">Gestión de proyectos</h2>
                        <p>Aquí vamos a realizar un CRUD completo de proyectos</p>
                        <div class="card-actions justify-end">
                            <a href="{{route("projects.index")}}" class="btn btn-primary">Ver proyectos</a>
{{--                            <a href="/projects" class="btn btn-primary">Ver proyectos</a>--}}
                        </div>
                    </div>
                </div>
            </main>
        @endauth
</x-layouts.layout>
