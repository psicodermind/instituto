<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;
use App\Models\User;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
    public function index()
    {
        $rows = User::role("teacher")->paginate(10);
        $datos=User::getLabels();

        $fie =User::getLabels()['fields'];
        $campos[]=User::$datos()['department'];
        $tabla=$datos['rol']['teacher'];

        return view('teachers.index', compact('teachers', 'campos', 'tabla'));
=======
    public function index(int $page=1)
    {
//        dd($page);

        $rows = User::role("teacher")->paginate(5);
        $datos = User::getLabels();
        $fields =$datos['fields'];
        $fields['department']=$datos['department'];

        $table= $datos['rol']['teacher'];

        return view('teachers.index', compact('rows', 'fields','table'));
>>>>>>> upstream/crudGenerico
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeacherRequest $request)
    {
        $datos = $request->input();
        Teacher::create($datos);
        return redirect()->route('teachers.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
<<<<<<< HEAD
        return view('teachers.edit', compact('teacher'));
=======
        $page = request()->get("page");

        return view('teachers.edit', compact('teacher', 'page'));
>>>>>>> upstream/crudGenerico
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
<<<<<<< HEAD
        $datos = $request->input();
        $teacher->update($datos);
        return redirect()->route('teachers.index');
=======
        $page = request()->get("page");
        $datos = $request->input();
        $teacher->update($datos);
        return redirect()->route('teachers.index',['page'=>$page]);
>>>>>>> upstream/crudGenerico

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
<<<<<<< HEAD
        $teacher->delete();
        return redirect()->route('teachers.index');
=======
        $page = request()->get('page');

        $lastpage = Teacher::paginate()->lastPage();
        if ($page > $lastpage) {
            $page--;
        }


        $teacher->delete();
        return redirect()->route('teachers.index', ['page'=>$page]);
//        return redirect()->back();
>>>>>>> upstream/crudGenerico

        //
    }
}
