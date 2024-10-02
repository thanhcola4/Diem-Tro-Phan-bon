<!-- @extends('layouts.user_type.auth') -->

<!-- @section('content') -->
<!-- <div class="container">
    <h2>Dashboard</h2> -->

    

        <!-- Yêu cầu hỗ trợ -->
        <!-- <div class="col-md-4">
            <h4>Yêu Cầu Hỗ Trợ</h4>
            @if($supportRequests->isEmpty())
                <p>Không có yêu cầu hỗ trợ nào.</p>
            @else
                <ul class="list-group">
                    @foreach($supportRequests as $request)
                        <li class="list-group-item">
                            <strong>{{ $request->name }}</strong>
                            <br>Email: {{ $request->email }}
                            <br>Điện thoại: {{ $request->phone }}
                            <br>Ghi chú: {{ $request->note }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div> -->

        <!-- Sản phẩm mới -->
        <!-- <div class="col-md-4">
            <h4>Sản Phẩm Mới</h4>
            @if($recentServices->isEmpty())
                <p>Không có sản phẩm mới nào.</p>
            @else
                <ul class="list-group">
                    @foreach($recentServices as $service)
                        <li class="list-group-item">
                            <strong>{{ $service->title }}</strong>
                            <br>Danh mục: {{ $service->category }}
                            <br>Giá: {{ number_format($service->price, 2) }} VND
                            @if($service->image)
                                <br><img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width: 100px; height: auto;">
                            @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div> -->
    <!-- </div>
</div>
@endsection -->
