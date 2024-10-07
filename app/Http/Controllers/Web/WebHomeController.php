<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\News;
use App\Models\Review;
use App\Models\SiteStatistics;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
        public function create()
        {
                    // Kiểm tra xem liệu có bản ghi thống kê nào chưa
            $stats = SiteStatistics::first();
            
            if ($stats) {
                // Nếu đã có, tăng lượt truy cập lên 1
                $stats->views = $stats->views + 1;
                $stats->save();
            } else {
                // Nếu chưa có bản ghi nào, tạo mới và tăng lượt truy cập
                SiteStatistics::create(['views' => 1]);
            }
            $newsItems = News::all();
            $service = Services::all();
            $reviews = Review::all();
            return view('web.home',compact('service','newsItems','reviews'));
        }
        public function store(Request $request)
        {

            // Validate dữ liệu
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'address' => 'nullable|string|max:255',
                'company' => 'nullable|string|max:255',
                'content' => 'nullable|string',
            ]);
            // Tạo bản ghi mới trong bảng contacts
            Contact::create($validatedData); 
        
            // Redirect hoặc thông báo thành công
            return redirect()->back()->with('success', 'Thông tin liên hệ đã được gửi!');
        }
        public function review(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'review' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ]);

    // Tạo đánh giá mới
    $review = Review::create([
        'content' => $request->review,
        'rating' => $request->rating,
    ]);
    return redirect()->back()->with('success', 'Cảm ơn bạn đã gửi đánh giá!');
}

}
