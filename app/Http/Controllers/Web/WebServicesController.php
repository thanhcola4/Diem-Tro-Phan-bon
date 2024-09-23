<?php

namespace App\Http\Controllers\Web;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class WebServicesController extends Controller
{
    public function create(Request $request)
    {
        
        $category = $request->input('category');
        // Nếu có danh mục được chọn, lọc sản phẩm theo danh mục
       
        if ($category) {
            $services = Services::where('category', $category)->get();
            Log::info('Services:', $services->toArray());  // Ghi thông tin vào log
        } else {
            $services = Services::all();
            Log::info('All Services:', $services->toArray());  // Ghi thông tin vào log
        }
        if ($request->ajax()) {
            return view('partials.services-list', compact('services'))->render();
        }
        return view('web.services',compact('services'));
    }
    public function show($id)
    {
        $service = Services::findOrFail($id);
        return view('web.show', compact('service'));
    }
}
