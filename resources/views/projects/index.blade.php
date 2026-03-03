<x-layouts.layout>
    <table >
        <tr>
            <td>Nombre</td>
            <td>Descripción</td>
            <td>Horas</td>
            <td>Fecha de comienzo</td>
        </tr>
        @foreach($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->hours}}</td>
                <td>{{$project->start_date}}</td>
                <td>Borrar</td>
                <td>Editar</td>
            </tr>
        @endforeach
    </table>
</x-layouts.layout>
