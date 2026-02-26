<header class="h-header bg-header flex flex-row justify-between items-center p-3">
<h1>{{__("EX1")}}</h1>
    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="logo">

    <h1 class="text-5xl text-titulo">{{__("GESTION DE INSTITUTO")}}</h1>
    <div class="space-x-2">
        <form action="{{route("set_lang")}}" method="POST">
            @csrf
            <select name="lang" id="lang"
            onchange="this.form.submit()">
                {{--            HAcer que el option sea un submit--}}
                <option selected disabled>{{__("Selecciona idioma")}}</option>
                @foreach(config("langs") as $lang => $detail)
                    <option value="{{$lang}}">{{$detail['name']}}&nbsp&nbsp&nbsp {{$detail['flag']}}  </option>
                @endforeach
            </select>
        </form>
        @guest

            <a href="{{route("login")}}">
                <button class="btn btn-sm btn-primary">{{__("Login")}}</button>
            </a>
            <a href="{{route("register")}}">
                <button class="btn btn-sm btn-primary">{{__("Register")}}</button>
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

