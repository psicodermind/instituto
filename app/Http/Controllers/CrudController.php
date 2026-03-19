<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CrudController extends Controller
{
    public function index(string $resource)
    {
        $config = config("resources.$resource");
        $resource_name = $config['resource'] ?? $resource;

        $model = "App\\Models\\" . Str::studly(Str::singular($resource_name));

        $query = $model::query();

        if (isset($config['role']))
            $query = $query->role("{$config['role']}");

        $rows = $query->paginate(5);
        $fields = $model::getFields();
        $table = __("$resource.table");

        return view('crud.index', compact('resource', 'rows', 'fields', 'table'));
    }

    public function store(string $resource, Request $request)
    {
        //
    }

    public function show(string $resource, string $id)
    {
        //
    }

    public function update(string $resource, Request $request, string $id)
    {
        //
    }

    public function destroy(string $resource, int $id)
    {
        $config = config("resources.$resource");
        $resource_name = $config['resource'] ?? $resource;

        $model = "App\\Models\\" . Str::studly(Str::singular($resource_name));
        $register = $model::find($id);
        $register->delete();

        return redirect(route("crud.index", $resource));
    }
}
