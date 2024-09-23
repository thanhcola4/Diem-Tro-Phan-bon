<?php

namespace App\Http\Controllers\Web;
use App\Models\Contract;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebContractController extends Controller
{
    public function create()
    {
        return view('web/contract');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'note' => 'required|string|max:1000',
        ]);
       

    Contract::create($validatedData); // Lưu dữ liệu vào DB

    


        return redirect()->back()->with('success', 'Thông tin đã được gửi thành công!');
    }
}
