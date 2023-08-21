<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        $roles = Role::all();

        return view('user.index',compact('users','roles'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('user.update', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this -> validate($request, [
            'name' => 'required',
             'phone' => 'required',
            'email' => 'required',
            'role_id' => 'required'

        ]);

        $requestData = $request -> all();
        $user->role_id = $requestData['role_id'];
        $user -> save();
        $user->update($requestData);


        return redirect()->route('users.index')->with('success', 'Category updated successfully !');
    }
}
