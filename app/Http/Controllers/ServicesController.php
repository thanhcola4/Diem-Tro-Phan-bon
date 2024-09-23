<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
       
        $services = Services::all(); 
        
        return view('laravel-examples.services-management', compact('services'));
    }

    public function create()
    {
        return view('laravel-examples.services');
    }

    public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Đảm bảo ảnh đúng định dạng
        ]);

        // Xử lý file ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $imageName = $originalName . '_' . time() . '.' . $extension;

            // Lưu file ảnh vào thư mục 'public/images'
            $path = $image->storeAs('images', $imageName, 'public');

            // Lưu dữ liệu vào cơ sở dữ liệu
            $services = new Services();
            $services->title = $validatedData['title'];
            $services->content = $validatedData['content']; // Lưu content
            $services->image = 'images/' . $imageName; // Đường dẫn tương đối từ thư mục public
            $services->save();
        }

        return redirect()->route('services.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function edit($id)
    {
        $service = Services::findOrFail($id);
        return view('laravel-examples.services-edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu đầu vào
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ảnh không bắt buộc
        ]);

        // Tìm đối tượng cần cập nhật
        $services = Services::findOrFail($id);

        // Cập nhật dữ liệu
        $services->title = $validatedData['title'];
        $services->content = $validatedData['content'];

        // Xử lý ảnh nếu có file mới
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $imageName = $originalName . '_' . time() . '.' . $extension;

            // Lưu file ảnh mới vào thư mục 'public/images'
            $path = $image->storeAs('images', $imageName, 'public');

            // Cập nhật đường dẫn ảnh trong cơ sở dữ liệu
            $services->image = 'images/' . $imageName;
        }

        // Lưu thay đổi vào cơ sở dữ liệu
        $services->save();

        return redirect()->route('services.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        // Tìm sản phẩm theo ID
        $service = Services::findOrFail($id);

        // Xóa ảnh liên quan nếu có
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        // Xóa sản phẩm
        $service->delete();

        // Chuyển hướng người dùng về trang danh sách với thông báo thành công
        return redirect()->route('services.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}
