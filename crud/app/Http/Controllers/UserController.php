<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        //validate the input
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);
        //create a new product in database
        User::create($request->all());
        //redirect the user
        return redirect('/')->with('success', 'User created successfully');
    }

    public function edit(User $user){
        return view('edituser', ['user' => $user]);
    }

    public function editUser(Request $request, User $user)
    {
           //validate the input
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required'
        ]);
        //create a new product in database
        $user->update($request->all());
        //redirect the user
        return redirect('/')->with('success', 'User updated successfully');
    }


    public function getUser(){
        $users = DB::table('users')->get();
        return view('users', ['users'=>$users]);
    }

    public function deleteUser(User $user)
    {
        //delete the product
        $user->delete();

        //redirect the user 
        return redirect('/')->with('success', 'User deleted successfully');
    }
}
