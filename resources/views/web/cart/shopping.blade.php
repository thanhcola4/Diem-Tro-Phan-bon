@extends ('web.index')

@section('content')
<div id="cart-page">
    <!-- Phần trên cùng của giỏ hàng -->
    <section class="cart-top">
        <div class="your-cart">
            <a href="baiviet" class="buymore">Mua thêm sản phẩm khác</a>
            <span>Giỏ hàng của bạn</span>
        </div>
    </section>
    @if(count($cart) > 0)
    <!-- Sản phẩm trong giỏ hàng -->
    <div class="cart-items">
        <ul>
            @foreach(Session::get('cart') as $id => $item)
            <li class="cart-item">
                 <a href="/san-pham/{{ $id }}" target="_blank">
                    <img src="{{ Storage::url($item['image']) }}" alt="{{ $item['title'] }}" loading="lazy">
                </a>
                <div class="item-right">
                    <div class="item-name">
                        <a href="/san-pham/{{ $id }}">{{ $item['title'] }}</a>
                    </div>
                    <div class="item-price">
                          <span>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}₫</span>
                    </div>
                    <form id="form-update-{{ $id }}" action="{{ route('cart.updatecart', $id) }}" method="POST">
                        @csrf
                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" class="quantity-input" onchange="updateCart({{ $id }})">
                    </form>
                    <div class="item-remove">
                    <form id="form-remove-{{ $id }}" action="{{ route('cart.remove', $id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-remove">Xóa</button>
                    </form>
            </div>

                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <!-- Tạm tính -->
    <div class="cart-summary">
        <span class="summary-label">Tạm tính ({{ count($cart) }} sản phẩm):</span>
    </div>
    <div class="cart-total">
        <span class="total-label">Tổng cộng:</span>
        <span class="total-value">{{ number_format($total, 0, ',', '.') }}₫</span>
    </div>

    <!-- Thông tin khách hàng -->
    <div class="customer-info">
    <h4>Thông tin khách hàng</h4>
    <form class="customer-form" action="{{ route('order.confirm') }}" method="POST">
        @csrf
        <div class="customer-fields">
            <input type="text" placeholder="Họ và Tên" name="name" required>
            <input type="tel" placeholder="Số điện thoại" name="phone" required>          
        </div>
        <button type="submit" class="btn-buy">Xác nhận mua hàng</button>
    </form>
</div>
    @else
            <!-- Giỏ hàng rỗng -->
            <div class="empty-cart">
                <h3>Giỏ hàng của bạn hiện đang trống</h3>
                <a href="" class="btn btn-primary">Tiếp tục mua sắm</a>
            </div>
        @endif
</div>
@section('scripts')
<script>
    function updateCart(id) {
        document.getElementById('form-update-' + id).submit();
        $.ajax({
        url: `/cart/update/${id}`, // Đường dẫn đến route xử lý cập nhật giỏ hàng
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}', // Bảo vệ CSRF
            quantity: quantity
        },
        success: function(response) {
            // Cập nhật lại giá của sản phẩm sau khi server trả về kết quả mới
            document.querySelector(`#form-update-${id}`).closest('.cart-item').querySelector('.item-price span').textContent = 
                response.newPriceFormatted + '₫';

            // Cập nhật tổng cộng toàn giỏ hàng nếu cần
            document.querySelector('.cart-total .total-value').textContent = response.totalFormatted + '₫';
        },
        error: function(error) {
            console.error(error);
        }
    });
    }

</script>
@endsection
@endsection