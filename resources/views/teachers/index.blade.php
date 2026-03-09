<x-layouts.layout>
    <a class="btn btn-primary">Añadir Profesor</a>

    <div class="flex justify-center ">
        <div class="overflow-x-auto h-96 ">
            <table class="table table-xs table-pin-rows table-pin-cols">
                <thead>
                <tr  class="lg:text-2xl">
                    <th>Nombre</th>
                    <th >Email</th>
                    <th>Departamento</th>
                    <th >Teléfono</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr class="lg:text-sm">
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->email}}</td>
                        <td>{{$teacher->department}}</td>
                        <td>{{$teacher->phone}}</td>
                        <td>
                            {{--                        <form action="{{route("projects.destroy",$project->id)}}" method="POST">--}}
                            <form method="POST">
                                <input type="submit" value="Borrar" class="btn btn-warning">
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-primary">Editar</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.layout>
