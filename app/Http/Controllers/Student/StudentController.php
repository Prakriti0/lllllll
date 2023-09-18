<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function add()
    {
        return view('AddStudent');
    }

    public function list()
    {
        $students = Student::all();
        return view('studentlist',compact('students'));
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->Email = $request->email;
        $student->phone= $request->phone;
        $student->address = $request->address;
        $student->save();
        return back();
    }

    public function update(request $request,student $id)
    {
        //dd($id);
        $id->name = $request->name;
        $id->Email = $request->email;
        $id->phone= $request->phone;
        $id->address = $request->address;
        $id->save();
        return back();   
    }
}

