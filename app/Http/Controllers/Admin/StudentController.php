<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculties = Category::all();
        return view('backend.student.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'photo' => 'max:1024'
        ]);
        $request->validate([
            'name'=>'required'
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->category_id = $request->category_id;
        if($request->hasFile('photo'))
        {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('student-photo', $newName);
            $student->photo = "student-photo/$newName";
        }
        $student->save();
        toast('Record saved', 'success');
        return redirect('/student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faculties = Category::all();
        $student = Student::find($id);
        return view('backend.student.edit',compact('faculties', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request ;
        $student = Student::find($id);
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->category_id = $request->category_id;
        if($request->hasFile('photo'))
        {
            $file = $request->photo;
            $newName = time() . $file->getClientOriginalName();
            $file->move('student-photo', $newName);
            $student->photo = "student-photo/$newName";
        }
        $student->update();
        toast('Record updated', 'success');
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
