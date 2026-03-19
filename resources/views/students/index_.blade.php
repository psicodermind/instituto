<x-layouts.layout>
    {{--    <div class="flex justify-center mt-10">--}}
    {{--        <div class="w-full max-w-6xl h-main overflow-y-auto overflow-x-auto">--}}
    {{--            <table class="table table-xs table-pin-rows table-pin-cols min-w-max">--}}
    {{--                <thead class="text-2xl">--}}
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Horas</th>
            <th>Fecha de comienzo</th>

        </tr>
        </thead>
        <tbody class="text-3xl">

        @foreach($projects as $project)
            <tr class="text-sm">
                <td>{{$project->name}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->hours}}</td>
                <td>{{$project->start_date}}</td>
                <td>Borrar</td>
                <td>Editar</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layouts.layout>
