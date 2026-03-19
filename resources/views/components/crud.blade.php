@props([
    'resource'=>"",
<<<<<<< HEAD
    'campos'=>[], //Array asociativo con nombre_campos => titulo para la tabla ("start_date"=>"Fecha de comienzo")
    'filas'=>[], //Un array de objetos
    'page'=>$_GET['page']??1
])


<a href="{{route("$resource.create")}}" class="btn btn-primary">Añadir {{strtoupper($resource)}}</a>
=======
    'fields'=>[], //Array asociativo con nombre_campos => titulo para la tabla ("start_date"=>"Fecha de comienzo")
    'rows'=>[], //Un array de objetos
    'page'=>$_GET['page']??1,
    'table'=>""
])



<a href="{{route("crud.create", $resource)}}" class="btn btn-primary">Añadir {{$table}}</a>
>>>>>>> upstream/crudGenerico
<div class="flex justify-center ">
    <div class="overflow-x-auto h-96 ">
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr class="lg:text-2xl">
<<<<<<< HEAD
                @foreach($campos as $campo)
                    <th>{{$campo}}</th>
=======
                @foreach($fields as $field)
                    <th>{{$field}}</th>
>>>>>>> upstream/crudGenerico
                @endforeach
                <th colspan="3">Acciones</th>

            </tr>
            </thead>
            <tbody>

<<<<<<< HEAD
            @foreach($filas as $fila)
                <tr class="lg:text-sm">


                    @foreach($campos as $atributo => $valor)
                        <td>{{$fila->{$atributo} }}</td>
                    @endforeach
                    <td>
                        <form action="{{route("$resource.destroy",$fila->id)}}?page={{$page}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="button" value="Borrar" class="btn btn-warning"
                                   onclick=" confirmarDelete(this)">
                        </form>
                    </td>
                    <td>
                        <a href="{{route("$resource.edit", $fila->id)}}?page={{$page}}" class="btn btn-primary">Editar</a>
                    </td>
=======
            @foreach($rows as $row)
                <tr class="lg:text-sm">

                    @foreach($fields as $atribute => $value)
                        <td>{{$row->{$atribute} }}</td>
                    @endforeach
                        <td>
                            <form action="{{route("crud.destroy",[$resource, $row->id])}}?page={{$page}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="button" value="Borrar" class="btn btn-warning"
                                       onclick="confirmarDelete(this)"
                                >
                            </form>
                        </td>
                        <td>
                            <a href="{{route("crud.edit",[$resource, $row->id])}}?page={{$page}}" class="btn btn-primary">Editar</a>
                        </td>
>>>>>>> upstream/crudGenerico

                </tr>
            @endforeach

            </tbody>
        </table>
<<<<<<< HEAD
        {{$filas->links()}}
=======
        {{$rows->links()}}
>>>>>>> upstream/crudGenerico
    </div>
</div>
<script>
    function confirmarDelete (button){
        Swal.fire({
<<<<<<< HEAD
            title: "¿Seguro que quieres borrar?",
            icon: "warning",
            showCancelButton:true,
            confirmButtonText:"Borrar definitivo",
        }).then( (result)=>{
            if (result.isConfirmed){
                button.closest('form').submit()
            }
        });
=======
            title: "Seguro que quieres borrar",
            icon: "question",
            showCancelButton:true,
            confirmButtonText: "Borrar definitivo"
        }).then( (result)=>{
            if (result.isConfirmed)
                button.closest('form').submit()
            }
        );
>>>>>>> upstream/crudGenerico
    }
</script>
