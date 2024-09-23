<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;


class InfoUserController extends Controller
{
    //phần này của nhân viên
    public function index()
    {
        $employees = User::all(); // Hoặc tùy thuộc vào logic của bạn
        return view('laravel-examples.user-management', compact('employees'));
    }
    
    public function create()
{
    return view('laravel-examples.user-create');
}
public function store(Request $request)
{
    // Validate the request data
    $validated = $request->validate([        
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password'=>'required|string|min:6',
        'role' => 'required|string|in:quản lý,nhân viên',
        
    ]);
    
    // Create a new user
    User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        // 'password' => Hash::make($request->input('password')),
        'password' => $request->input('password'), 
        'role' => $request->input('role'),
    ]);

    // Redirect with success message
    return redirect()->route('user.index')->with('success', 'User created successfully');
}


    public function edit($id)
    {
        $employee = User::find($id);
        return view('laravel-examples.user-edit', compact('employee'));
    }
    
    public function update(Request $request, $id)
    {
        $employee = User::find($id);
        $employee->update($request->all());
        return redirect()->route('user.index')->with('success', 'Employee updated successfully');
    }
    
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success', 'Employee deleted successfully');
    }
    
}