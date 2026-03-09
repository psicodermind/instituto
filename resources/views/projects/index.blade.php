<x-layouts.layout>
    <x-crud >
        <x-slot name="resource">
            projects
        </x-slot>
        <x-slot name="filas">
            {{$projects}}
        </x-slot>
        <x-slot name="campos">
            ['Titulo', 'Descripción','Horas', 'Fecha de comienzo']
        </x-slot>
    </x-crud>
</x-layouts.layout>
