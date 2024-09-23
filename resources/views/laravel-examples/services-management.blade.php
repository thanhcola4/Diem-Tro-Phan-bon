@extends('layouts.user_type.auth')

@section('content')
<style>

</style>    

<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Danh Sách Bài Viết</h2>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Thêm Bài Viết Mới</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề bài viết</th>
                <th>Nội Dung</th>
                <th>Ảnh</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>
                    <div class="content-preview">
                        {!! Str::limit($service->content, 10) !!} <!-- Hiển thị tối đa 100 ký tự -->
                    </div>
                    </td>
                    
                    <td>
                    
                        @if($service->image)
                            <img class="service-image" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" >
                        @else
                            Không có ảnh
                        @endif
                       
                    </td> 
                               
                    <td>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Chỉnh Sửa</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
