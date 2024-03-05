<?php

namespace App\Http\Controllers;

use App\Models\listItem;
use App\Models\TestUser;
use Illuminate\Http\Request;

class TestUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.userList', ['users' => TestUser::all()]);
    }
    public function check($id){
//        return view('user.pass18', ['users' => TestUser::all()]);
        $checkUser = TestUser::find($id);
            return view('user.under18');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new TestUser();
        $user->name = $request->name;
        $user->age = $request->age;
        $user->save();

        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(TestUser $testUser)
    {

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TestUser $testUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TestUser $testUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TestUser $testUser)
    {
        //
    }
}

