@props([
    'resource'=>"",
    'campos'=>[],
    'filas'=>[]
])

<a href="{{route("$resource.index")}}" class="btn btn-primary">Añadir {{strtoupper($resource)}}</a>

<div class="flex justify-center ">
    <div class="overflow-x-auto h-96 ">
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr class="lg:text-2xl">
                @dd($campos);
                @foreach($campos as $campo)
                    <th>{{$campo}}</th>
                @endforeach

            </tr>
            </thead>
            <tbody>
            @foreach($filas as $fila)
                <tr class="lg:text-sm">
                    @foreach($fila as $valor)
                        <td>{{$valor}}</td>
                        <td>
                            <form action=" {{route("$resource",$valor->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Borrar" class="btn btn-warning"
                                       onclick="return confirm('Seguro que quiers borrar')"
                                >
                            </form>
                        </td>
                        <td>
                            <a href="{{route("$resource.edit", $valor->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                    @endforeach
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
