<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\Models\User;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
{
    $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    // Tìm người dùng theo email
    $user = User::where('email', $attributes['email'])->first();

    // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
    if ($user && $user->password === $attributes['password']) {
        Auth::login($user); // Đăng nhập người dùng
        session()->regenerate(); // Regenerate session ID
        return redirect('/')->with('success', 'Bạn đã đăng nhập thành công');
    } else {
        // Thông báo lỗi khi đăng nhập không thành công
        return back()->withErrors(['email' => 'Email và mật khẩu không hợp lệ']);
    }
}

    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['Thành công'=>'Bạn đã đăng xuất']);
    }
}
