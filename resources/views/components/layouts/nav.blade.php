<nav class="lg:h-nav  bg-nav flex flex-col lg:flex-row
px-5 justify-start items-center lg:space-x-2 ">
    <a href="{{route("main")}}" class="btn btn-glass  w-full lg:w-auto">About</a>
    <a href="/noticias" class="btn btn-glass text-header  w-full lg:w-auto">Noticias</a>
    @auth
        <a href="/projects" class="btn btn-glass w-full lg:w-auto">Projectos</a>
        <a href="/teachers" class="btn btn-glass w-full lg:w-auto">Profesores</a>
        <a href="/students" class="btn btn-glass w-full lg:w-auto">Estudiantes</a>
    @endauth
</nav>
