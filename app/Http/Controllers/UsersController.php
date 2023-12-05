<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\UserGroups;

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::with('group')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $userGroups = UserGroups::pluck('group_name', 'id');
        return view('users.create', compact('userGroups'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'group_id' => 'required|exists:user_groups,id',
            'is_active' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        Users::create($validatedData);
        

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function edit(Users $user)
    {
        $userGroups = UserGroups::pluck('group_name', 'id');
        return view('users.edit', compact('user', 'userGroups'));
    }

    public function update(Request $request, Users $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'password' => 'required|min:8',
            'group_id' => 'required|exists:user_groups,id', 
            'is_active' => 'required',
        ]);
        
        // Cek apakah ada inputan password baru
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            // Jika tidak ada password baru, gunakan password yang ada
            $validatedData['password'] = $user->password;
        }
        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(Users $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');    }
}
