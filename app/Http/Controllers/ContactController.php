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
    public function process($id)
    {
        $contact = Contact::findOrFail($id);
        // Thực hiện xử lý với thông tin liên hệ
        // ...

        return redirect()->route('contacts.index')->with('success', 'Thông tin đã được xử lý thành công!');
    }
}
