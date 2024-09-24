@extends('web.index')

@section('show')

<div class="container text-center my-5">
    
    <h1 class="service-title">{{ $service->title }}</h1>
    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid service-image">
    <p class="service-content">{!! $service->content !!}</p>
</div>
<div class="container text-center mt-4">
    <button class="button-85" role="button" data-bs-toggle="modal" data-bs-target="#contactModal">ĐẶT MUA</button>

    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-content-contact">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Thông Tin Liên Hệ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="contactForm" action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Họ và Tên</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="company" class="form-label">Công ty</label>
                            <input type="text" class="form-control" id="company" name="company">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Vài lời nhắn nhủ</label>
                            <textarea class="form-control" id="content" name="content"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Đặt Mua</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection