<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use App\Models\Services;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       // Lấy danh sách đơn hàng mới nhất

    // Lấy danh sách yêu cầu hỗ trợ từ khách hàng mới nhất
    $supportRequests = Contract::latest()->take(5)->get();

    // Lấy sản phẩm hoặc dịch vụ mới nhất
    $recentServices = Services::latest()->take(5)->get();

    // Trả về view dashboard với các biến đã được truyền vào
    return view('dashboard', compact( 'supportRequests', 'recentServices'));
    }
}
