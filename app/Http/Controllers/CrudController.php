<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
>>>>>>> upstream/crudGenerico

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index()
    {
=======
    public function index(string $resource)
    {
        //Recuperar todos los datos de resources del config

        $config =config("resources.$resource");
        $resource_name = $config['resource']??$resource;

        //Resolvemos de forma dinámica el modelo
        $model = "App\\Models\\".Str::studly(Str::singular($resourcename));

        //Preparamos la consuta
        $query = $model::query();

        //Aplicamos el filtro de rol si tiene
        if (isset($config['role']))
            $query = $query->role("{$config['role']}");

        $rows=$query->paginate(5);

        $fields = $model::getFields();

        $table = __("$resource.table");
        return view('crud.index', compact('resource', 'rows', 'fields', 'table'));

        //TODO Tener en cuanta los roles.





        return "<h1>Voy a gestionar $resource</h1>";
>>>>>>> upstream/crudGenerico
        //
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
=======
    public function store(string $resource,Request $request)
>>>>>>> upstream/crudGenerico
    {
        //
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(string $id)
=======
    public function show(string $resource, string $id)
>>>>>>> upstream/crudGenerico
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
<<<<<<< HEAD
    public function update(Request $request, string $id)
=======
    public function update(string $resource, Request $request, string $id)
>>>>>>> upstream/crudGenerico
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(string $id)
    {
=======
    public function destroy(string $resource, int $id)
    {
        $model = "App\\Models\\".Str::studly(Str::singular($resource));
        $register = $model::find($id);
        $register->delete();
        return redirect(route("crud.index", $resource));
        //TODO si es rol, tengo que buscar el modelo de ese rol

>>>>>>> upstream/crudGenerico
        //
    }
}
