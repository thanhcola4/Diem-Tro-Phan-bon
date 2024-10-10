<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all(); // Lấy tất cả các liên hệ
        return view('laravel-examples/contact-index', compact('contacts'));
    }
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('laravel-examples/contact', compact('contact'));
    }
   
    public function updateStatus($id, $status)
    {
        $contact = Contact::find($id);
        $contact->status = $status;
        $contact->save();

        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công!');
    }
    public function process(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
    
        if ($request->input('status') === 'success') {
            // Cập nhật trạng thái thành "đã xử lý"
            $contact->status = 'đã xử lý';
            $contact->save();
            return redirect()->route('contacts.index')->with('success', 'Thông tin đã được xử lý thành công.');
        } elseif ($request->input('status') === 'cancel') {
            // Cập nhật trạng thái thành "đã hủy"
            $contact->status = 'đã hủy';
            $contact->save();
            return redirect()->route('contacts.index')->with('success', 'Thông tin đã bị hủy.');
        }
    
        return redirect()->back()->with('error', 'Đã xảy ra lỗi.');
    }
    
}
