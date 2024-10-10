@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <h2>Danh Sách Khách Hàng Cần Phản Hồi</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và Tên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Công ty</th>
                <th>Nội dung</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->company }}</td>
                    <td>{{ $contact->content }}</td>
                    <td>
                    @if($contact->status == 'đang xử lý')
                            <span class="badge bg-warning">Đang Xử Lý</span>
                        @elseif($contact->status == 'đã hủy')
                            <span class="badge bg-danger">Đã Hủy</span>
                        @else
                            <span class="badge bg-success">Đã Xử Lý</span>
                        @endif
                        <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">Xem</a>
                    </td>
                   
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection