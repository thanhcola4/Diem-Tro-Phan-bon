@extends('layouts.user_type.auth')
@section('content')
<div class="container">
    <h2>Thông Tin Đặt Hàng</h2>
    <ul>
        <li><strong>Họ và Tên:</strong> {{ $contact->name }}</li>
        <li><strong>Số điện thoại:</strong> {{ $contact->phone }}</li>
        <li><strong>Email:</strong> {{ $contact->email }}</li>
        <li><strong>Địa chỉ:</strong> {{ $contact->address }}</li>
        <li><strong>Công ty:</strong> {{ $contact->company }}</li>
        <li><strong>Nội dung:</strong> {{ $contact->content }}</li>
    </ul>
    <form action="{{ route('contacts.process', $contact->id) }}" method="POST">
        @csrf
        <button type="submit" name="status" value="success" class="btn btn-success">Xử lý Thành Công</button>
        <button type="submit" name="status" value="cancel" class="btn btn-danger">Hủy</button>
    </form>
</div>
@endsection