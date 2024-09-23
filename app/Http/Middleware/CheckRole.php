<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Kiểm tra vai trò của người dùng hiện tại
        if (auth()->check() && auth()->user()->role === $role) {
            return $next($request);
        }

        // Nếu người dùng không có vai trò đúng, chuyển hướng hoặc hiển thị thông báo lỗi
        return redirect()->route('home')->with('error', 'Access denied');
    }
}
