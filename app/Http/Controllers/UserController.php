<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users = user::all();
        $users = User::all();
        $pageTitle = 'Users';
        $subTitle = 'List of active user';
        return view('user.index', compact('pageTitle', 'subTitle', 'users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pageTitle = 'Users';
        $subTitle = 'Add new user';
        return view('user.create', compact('pageTitle', 'subTitle'));

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
        $user = new user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        if(filled($request->file('profile_img'))) {
            $path = $request->file('profile_img')
            ->storeAs('public/files/user', $user->id . '.' . $request->file('profile_img')->extension());

            $path = \Str::of($path)->replace('public', 'storage');

            $user->profile_img = $path;
        }

        if ($user->save()) {
            return redirect()->route('user.index')->with('successMessage','User has been successfully created');
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
        $user = User::findOrFail($id);
        $pageTitle = 'Users';
        $subTitle = 'user details';
        return view('user.show', compact('pageTitle', 'subTitle', 'user'));
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
        $user = User::findOrFail($id);
        $pageTitle = 'Users';
        $subTitle = 'Edit user details';
        return view('user.edit', compact('pageTitle', 'subTitle', 'user'));
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
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->profile_img = $request->input('profile_img');
        // $course->save();
        // return redirect()->route('course.index');
        if ($user->save()) {
            return redirect()->route('user.index')->with('successMessage','user has been successfully updated');
        } else {
            return back()->with('errorMessage','Unable to update user into database. Contact admin');
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
        $user = User::findOrFail($id);
        // $course->delete();
        // return redirect()->route('course.index');
        if ($user->delete()) {
            return redirect()->route('user.index')->with('successMessage','user has been successfully deleted');
        } else {
            return back()->with('errorMessage','Unable to delete user from database. Contact admin');
        }
    }
}
