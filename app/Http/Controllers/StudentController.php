<?php

namespace App\Http\Controllers;

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
        //
        //$students = Student::all();
        $students = Student::with('course')->get();
        $pageTitle = 'Students';
        $subTitle = 'List of active student';
        return view('student.index', compact('pageTitle', 'subTitle', 'students'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pageTitle = 'Students';
        $subTitle = 'Add new student';
        return view('student.create', compact('pageTitle', 'subTitle'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return $request->name . ' ' . $request->url;
        $student = new Student();
        $student->name = $request->input('name');
        $student->ic = $request->input('ic');
        $student->ndp = $request->input('ndp');
        $student->tel_no = $request->input('tel_no');
        $student->gender = $request->input('gender');
        $student->course_id = $request->input('course_id');
        // $course->save();
        // return redirect()->route('course.index');

        if ($student->save()) {
            return redirect()->route('student.index')->with('successMessage','Student has been successfully created');
        } else {
            return back()->with('errorMessage','Unable to student course into database. Contact admin');
        }
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
        $student = Student::findOrFail($id);
        $pageTitle = 'Students';
        $subTitle = 'Student details';
        return view('student.show', compact('pageTitle', 'subTitle', 'student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::findOrFail($id);
        $pageTitle = 'Students';
        $subTitle = 'Edit student details';
        return view('student.edit', compact('pageTitle', 'subTitle', 'student'));
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
        //
        $student = Student::findOrFail($id);
        $student->name = $request->input('name');
        $student->ic = $request->input('ic');
        $student->ndp = $request->input('ndp');
        $student->tel_no = $request->input('tel_no');
        $student->gender = $request->input('gender');
        $student->course_id = $request->input('course_id');
        // $course->save();
        // return redirect()->route('course.index');
        if ($student->save()) {
            return redirect()->route('student.index')->with('successMessage','Student has been successfully updated');
        } else {
            return back()->with('errorMessage','Unable to update student into database. Contact admin');
        }
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
        $student = Student::findOrFail($id);
        // $course->delete();
        // return redirect()->route('course.index');
        if ($student->delete()) {
            return redirect()->route('student.index')->with('successMessage','Student has been successfully deleted');
        } else {
            return back()->with('errorMessage','Unable to delete student from database. Contact admin');
        }
    }
}
