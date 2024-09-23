@extends ('web.index')

@section('content')
<div class="container">
    <h2>Đặt Hàng Thành Công!</h2>
    <p>Cảm ơn bạn đã mua hàng. Đơn hàng của bạn đang được xử lý.</p>
    <a href="{{ route('webservices.index') }}" class="btn btn-primary">Tiếp Tục Mua Sắm</a>
</div>
@endsection