<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(5);
        $campos = Student::getLabels();
<<<<<<< HEAD

        return view('students.index', compact('students', 'campos'));
=======
        return view('students.index', compact('students', 'campos'));
        //
>>>>>>> upstream/crudGenerico
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
<<<<<<< HEAD
=======
        //
>>>>>>> upstream/crudGenerico
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
<<<<<<< HEAD
        Student::create($request->input());
        return redirect()->route('students.index');
=======
        $datos = $request->input();
        Student::created($datos);
        return redirect()->route('students.index');
        //
>>>>>>> upstream/crudGenerico
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
<<<<<<< HEAD
=======
        //
>>>>>>> upstream/crudGenerico
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
<<<<<<< HEAD
        $student->update($request->input());
        return redirect()->route('students.index');
=======
        $datos = $request->input();
        $student->updated($datos);
        return redirect()->route('students.index');
        //
>>>>>>> upstream/crudGenerico
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
<<<<<<< HEAD
        $student->delete();
        return redirect()->route('students.index');
=======
        $page = request()->get('page');
        $student->delete();
        return redirect()->route('students.index', ['page' => $page]);
        //
>>>>>>> upstream/crudGenerico
    }
}
