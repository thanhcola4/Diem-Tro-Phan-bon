<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewController extends Controller
{
    public function index(Request $request)
    {
        // Không còn lọc theo danh mục vì đã xoá trường 'category'
        $new = News::all(); // Lấy tất cả dịch vụ/sản phẩm
        $new->views = $new->views + 1;
        $new->save();  // Lưu lại lượt truy cập
        return view('laravel-examples.new-management', compact('new'));
    }

    public function create()
    {
        return view('laravel-examples.new-create');
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
            $new = new News();
            $new->title = $validatedData['title'];
            $new->content = $validatedData['content']; // Lưu content
            $new->image = 'images/' . $imageName; // Đường dẫn tương đối từ thư mục public
            $new->save();
        }

        return redirect()->route('new.index')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function edit($id)
    {
        $new = News::findOrFail($id);
        return view('laravel-examples.new-edit', compact('new'));
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
        $services = News::findOrFail($id);

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

        return redirect()->route('new.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        // Tìm sản phẩm theo ID
        $service = News::findOrFail($id);

        // Xóa ảnh liên quan nếu có
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        // Xóa sản phẩm
        $service->delete();

        // Chuyển hướng người dùng về trang danh sách với thông báo thành công
        return redirect()->route('new.index')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}
