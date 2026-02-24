<header class="h-header bg-header flex flex-row justify-between items-center p-3">

    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="logo">

    <h1 class="text-5xl text-titulo">GESTION DE INSTITUTO</h1>
    @guest
        <div class="space-x-2">
            <a href="{{route("login")}}">
                <button class="btn btn-sm btn-primary">Login</button>
            </a>
            <a href="{{route("register")}}">
                <button class="btn btn-sm btn-primary">Register</button>
            </a>
        </div>
    @endguest
    @auth
        {{auth()->user()->name}}
        <form action="{{route("logout")}}" method="POST">
            @csrf
            <button class="btn btn-primary" type="submit">Logout</button>
        </form>

    @endauth


</header>

