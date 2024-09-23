@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Thêm tin tức mới</h2>
        <a href="{{ route('new.index') }}" class="btn btn-secondary">Danh Sách tin tức</a>
    </div>

    <form action="{{ route('new.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Nội dung sản phẩm -->
        <div class="form-group">
            <label for="content">Nội Dung:</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>

        <!-- Chọn ảnh -->
        <div class="form-group">
            <label for="image">Chọn Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>

        <!-- Nút thêm sản phẩm -->
        <button type="submit" class="btn btn-primary">Thêm tin tức</button>
    </form>
</div>

@endsection
