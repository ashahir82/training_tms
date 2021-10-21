<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        $pageTitle = 'Courses';
        $subTitle = 'List of active course';
        return view('course.index', compact('pageTitle', 'subTitle', 'courses'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pageTitle = 'Courses';
        $subTitle = 'Add new course';
        return view('course.create', compact('pageTitle', 'subTitle'));

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
        $course = new Course();
        $course->code = $request->input('code');
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->is_active = $request->input('is_active');
        // $course->save();
        // return redirect()->route('course.index');

        if ($course->save()) {
            return redirect()->route('course.index')->with('successMessage','Course has been successfully created');
        } else {
            return back()->with('errorMessage','Unable to create course into database. Contact admin');
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
        $course = Course::findOrFail($id);
        $pageTitle = 'Courses';
        $subTitle = 'Course details';
        return view('course.show', compact('pageTitle', 'subTitle', 'course'));
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
        $course = Course::findOrFail($id);
        $pageTitle = 'Courses';
        $subTitle = 'Edit course details';
        return view('course.edit', compact('pageTitle', 'subTitle', 'course'));
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
        $course = Course::findOrFail($id);
        $course->code = $request->input('code');
        $course->name = $request->input('name');
        $course->description = $request->input('description');
        $course->is_active = $request->input('is_active');
        // $course->save();
        // return redirect()->route('course.index');
        if ($course->save()) {
            return redirect()->route('course.index')->with('successMessage','Course has been successfully updated');
        } else {
            return back()->with('errorMessage','Unable to update course into database. Contact admin');
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
        $course = Course::findOrFail($id);
        // $course->delete();
        // return redirect()->route('course.index');
        if ($course->delete()) {
            return redirect()->route('course.index')->with('successMessage','Course has been successfully deleted');
        } else {
            return back()->with('errorMessage','Unable to delete course from database. Contact admin');
        }
    }
}
