@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Chỉnh Sửa tin tức</h2>
        <a href="{{ route('new.index') }}" class="btn btn-secondary">Danh Sách tin tức</a>
    </div>

    <form action="{{ route('new.update', $new->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $new->title }}" required>
        </div>

        <!-- Nội dung sản phẩm -->
        <div class="form-group">
            <label for="content">Nội Dung:</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $new->content }}</textarea>
        </div>

        <!-- Chọn ảnh -->
        <div class="form-group">
            <label for="image">Chọn Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image">
            @if($new->image)
                <p>Ảnh hiện tại:</p>
                <img src="{{ asset('storage/' . $new->image) }}" alt="{{ $new->title }}" style="width: 100px; height: auto;">
            @endif
        </div>

        <!-- Nút cập nhật sản phẩm -->
        <button type="submit" class="btn btn-primary">Cập Nhật sản phẩm</button>
    </form>
</div>
@endsection
