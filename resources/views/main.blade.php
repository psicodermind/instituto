<x-layouts.layout>
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
</x-layouts.layout>
