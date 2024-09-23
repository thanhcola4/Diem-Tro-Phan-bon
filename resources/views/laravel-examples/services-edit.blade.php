@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Chỉnh Sửa Bài Viết</h2>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Danh Sách bài viết</a>
    </div>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
        </div>

        <!-- Nội dung sản phẩm -->
        <div class="form-group">
            <label for="content">Nội Dung:</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $service->content }}</textarea>
        </div>

        <!-- Chọn ảnh -->
        <div class="form-group">
            <label for="image">Chọn Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($service->image)
                <p>Ảnh hiện tại:</p>
                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width: 100px; height: auto;">
            @endif
        </div>

        <!-- Nút cập nhật sản phẩm -->
        <button type="submit" class="btn btn-primary">Cập Nhật bài viết</button>
    </form>
</div>
@endsection
