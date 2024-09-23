<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/trangchu') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">

            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('trangchu') ? 'active' : '' }}" href="{{ url('/trangchu') }}">Trang Chủ</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">Về chúng tôi</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('baiviet') ? 'active' : '' }}" href="{{ url('/baiviet') }}">Bài viết</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('tintuc') ? 'active' : '' }}" href="{{ url('/tintuc') }}">Tin tức</a>
                  </li>
                  
                  <li class="nav-item">
                     <a class="nav-link {{ Request::is('lienhe') ? 'active' : '' }}" href="{{ url('/lienhe') }}">Liên hệ</a>
                  </li>
                  
               </ul>
            </div>
        </div>
    </nav>