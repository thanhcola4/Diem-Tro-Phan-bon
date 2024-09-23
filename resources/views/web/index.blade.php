<!DOCTYPE html>
<html lang="vi">
<head>
    @include('web.layouts.head')
</head>
@yield('scripts')
<body>
    <!-- Navigation -->
    @include('web.layouts.navbar')

    @if(\Request::is('trangchu'))
        @yield('home')
        @include ('web.layouts.footer')
    
    @elseif(\Request::is('about'))
        @yield ('about')
        @include ('web.layouts.footer')

    @elseif(\Request::is('lienhe'))
        @yield('contract')
        @include ('web.layouts.footer')

    @elseif(\Request::is('baiviet'))
        @yield('services')
        @include ('web.layouts.footer')

    @elseif(\Request::is('tintuc'))
        @yield('news')
        @include ('web.layouts.footer')
        
    @elseif(\Request::is('tintuc/*')) <!-- Thêm điều kiện cho trang show -->
        @yield('shownews')
        @include ('web.layouts.footer')  

    @elseif(\Request::is('baiviet/*')) <!-- Thêm điều kiện cho trang show -->
        @yield('show')
        @include ('web.layouts.footer')   

    @else
        @yield('content')
    @endif

    <!-- Bootstrap core JavaScript -->
    @include('web.layouts.demo')



</body>
</html>
