<header class="h-header bg-header flex flex-row justify-between items-center p-3">

    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="logo">

    <h1 class="text-5xl text-titulo">GESTION DE INSTITUTO</h1>
    <div class="space-x-2">
        @guest

            <a href="{{route("login")}}">
                <button class="btn btn-sm btn-primary">Login</button>
            </a>
            <a href="{{route("register")}}">
                <button class="btn btn-sm btn-primary">Register</button>
            </a>

        @endguest
        @auth
            <span class="text-green-800 text-3xl">{{auth()->user()->name}}
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>

        @endauth
    </div>

</header>

