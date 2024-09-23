@extends('layouts.user_type.auth')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Thêm Bài Viết Mới</h2>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Danh Sách Bài Viết</a>
    </div>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Tên sản phẩm -->
        <div class="form-group">
            <label for="title">Tiêu đề:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Nội dung sản phẩm -->
        <div class="form-group">
        <label for="content">Nội Dung:</label>
        <textarea name="content" id="content" class="form-control" ></textarea>
    </div>


        <!-- Chọn ảnh -->
        <div class="form-group">
            <label for="image">Chọn Ảnh:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>

        <!-- Nút thêm sản phẩm -->
        <button type="submit" class="btn btn-primary">Thêm Bài viết</button>
    </form>
</div>


@endsection
<script>
        $(document).ready(function() {
            ClassicEditor
                .create(document.querySelector('#content'))
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
