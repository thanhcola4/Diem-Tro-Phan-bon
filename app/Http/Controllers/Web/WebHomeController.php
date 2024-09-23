<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\News;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
        public function create()
        {
            $newsItems = News::all();
            $service = Services::all();
            return view('web.home',compact('service','newsItems'));
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
}
