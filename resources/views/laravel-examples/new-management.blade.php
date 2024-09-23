@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Danh Sách tin tức</h2>
        <a href="{{ route('new.create') }}" class="btn btn-primary">Thêm tin tức mới</a>
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
                <th>Tiêu đề</th>
                <th>Nội Dung</th>
                <th>Ảnh</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($new as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->title }}</td>
                    <td>
                    <div class="content-preview">
                        {!! Str::limit($news->content, 10) !!} <!-- Hiển thị tối đa 100 ký tự -->
                    </div>
                    </td>
                    
                    <td>
                    
                        @if($news->image)
                            <img class="service-image" src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" >
                        @else
                            Không có ảnh
                        @endif
                       
                    </td> 
                    <td>
                        <a href="{{ route('new.edit', $news->id) }}" class="btn btn-warning btn-sm">Chỉnh Sửa</a>
                        <form action="{{ route('new.destroy', $news->id) }}" method="POST" style="display:inline;">
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
