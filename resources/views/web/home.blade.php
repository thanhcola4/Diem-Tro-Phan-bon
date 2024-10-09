@extends ('web.index')
   @section('home')

      
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Xây dựng và giới thiệu website quản lý diêm tro, phân bón và thuốc trừ sâu </h3>
                     <p>Quảng bá trang web xây dựng và quản lý các sản phẩm mặt hàng nhà nông</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Xây dựng và giới thiệu website quản lý diêm tro, phân bón và thuốc trừ sâu </h3>
                     <p>Vì Môi Trường Xanh Sạch Đẹp</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Xây dựng và giới thiệu website quản lý diêm tro, phân bón và thuốc trừ sâu </h3>
                     <p>Tiện lợi cho người nông dân dễ dàng tìm kiếm sản phẩm</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Quay về</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Kế tiếp</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
   

    <div class="container">      
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Diêm Tro - Phân Bón</h2>
                  <p>Phân bón là sản phẩm có chức năng cung cấp chất dinh dưỡng hoặc có tác dụng cải tạo đất để làm tăng năng suất, chất lượng cho cây trồng. 
                     </p>
                  <h5>Vai trò của phân bón
                     </h5>
                  <ul>
                     <li>Giúp cây trồng sinh trưởng và phát triển tốt, nâng cao năng suất và chất lượng nông sản, làm tăng thu nhập và lợi nhuận cho người sản xuất.
                       </li>
                     <li>Có tác dụng cải tạo đất.
                        </li>
                     <li>Một số loại phân bón phổ biến: phân bón hóa học, phân bón hữu cơ, phân bón vi sinh. Các loại này có những đặc điểm giống và khác nhau.
                        </li>
                     
                  </ul>
                  
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <div class="container">
        <div class="container-fourbox">
            <h1>Sẽ được lợi gì khi mua website của chúng tôi?</h1>
            <div class="cards">
                <div class="card">
                    <img src="images/experience_icon.png" alt="Kinh nghiệm">
                    <h2>Hơn 10 năm kinh nghiệm</h2>
                    <p>Với đội ngũ nhiều năm kinh nghiệm trong lĩnh vực sáng tạo trang web, chúng tôi cam kết chất lượng trang web luôn đạt tốt nhất.</p>
                </div>
                <div class="card">
                    <img src="images/customer-service.png" alt="Sửa chữa">
                    <h2>Sửa chữa bảo hành</h2>
                    <p>Đến với chúng tôi, trang web sẽ luôn được bảo hành và sửa chữa khi có bất kì lỗi xảy ra.</p>
                </div>
                <div class="card">
                    <img src="images/utilities.png" alt="đầy đủ và tiện ích">
                    <h2>Quản lý đầy đủ và tiện ích</h2>
                    <p>Nhiều chức năng quản lý tiện ích giúp chủ sở hữu thao tác dễ dàng và đơn giản.</p>
                </div>
                <div class="card">
                    <img src="images/friendly.png" alt="Dịch vụ 24/7">
                    <h2>Giao diện dễ nhìn và thân thiện</h2>
                    <p>Giao diện được chúng tôi thiết kế tông nền xanh giúp người dân, khách mua hàng dễ dàng truy cập từ đó đẩy mạnh doanh thu.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-new">
            <div class="news-table">
                <div class="title">
                    <h2>BÀI VIẾT SẢN PHẨM</h2>
                </div>
                <section class="news-page ">
                    <div class="news-page-container container-fluid">
                        <div class="news-page-slider slick-slider">
                            @foreach ($service as $service)
                                <div class="news-page-item card">
                                    <img class="card-img-top" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
                                    <div class="card-body">
                                        <div class="news-page-title card-title h5">{!! Str::limit($service->title, 30) !!}</div>
                                        <p class="news-page-text card-text">{!! Str::limit(strip_tags($service->content), 200) !!}
                                        </p> 
                                        <a href="{{ route('webservices.show', $service->id) }}" class="btn btn-primary">Xem thêm</a> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

  
    <!-- /.container -->
    <div class="container">
        <section class="contact-section">
            <div class="contact-content">
                <div class="row">
                    <!-- Contact Form on the left -->
                    <div class="col-lg-6 contact-left">
                        <h3>LIÊN HỆ CHÚNG TÔI</h3>
                        <form action="{{ route('contract.store') }}" method="POST">
                            @csrf
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Họ tên:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <p class="text-danger text-xs mt-2"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Số điện thoại:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Ghi chú:</label>
                                    <textarea rows="5" cols="100" class="form-control" id="note" name="note" required maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </form>
                    </div>
                    
                    <!-- Text content on the right -->
                    <div class="col-lg-6 contact-right">
                        <h2>Chúng tôi sẵn sàng hỗ trợ bạn!</h2>
                        <p>Hãy điền vào form liên hệ để chúng tôi có thể giúp bạn một cách tốt nhất. Đội ngũ của chúng tôi luôn ở đây để tư vấn và hỗ trợ các dịch vụ mà bạn cần.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <div class="container-new">
            <div class="news-table">
                <div class="title">
                    <h2>TIN TỨC</h2>
                </div>
                <section class="news-page">
                    <div class="news-page-container container-fluid">
                        <div class="news-page-slider slick-slider">
                            @foreach ($newsItems as $news)
                                <div class="news-page-item card">
                                    <img class="card-img-top" src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}">
                                    <div class="card-body">
                                        <div class="news-page-title card-title h5">{!! Str::limit($news->title, 20) !!}</div>
                                        <p class="news-page-text card-text">{!! Str::limit(strip_tags($news->content), 200) !!}</p> 
                                        <a href="{{ route('webnew.show', $news->id) }}" class="btn btn-primary">Xem thêm</a> 
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-feedback">
                <h2>ĐÁNH GIÁ SẢN PHẨM</h2>
                <p>Hãy cho chúng tôi biết trang web cần cải thiện và bạn không hài lòng ở điểm nào.</p>
                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="review">Nội dung đánh giá:</label>
                        <textarea class="form-control" id="review" name="review" rows="5" placeholder="Nhập đánh giá của bạn" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="rating">Đánh giá:</label>
                        <div class="star-rating">
                            <input type="radio" id="star5" name="rating" value="5" required />
                            <label for="star5" title="5 sao">★</label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4" title="4 sao">★</label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label for="star3" title="3 sao">★</label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2" title="2 sao">★</label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1" title="1 sao">★</label>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">Gửi đánh giá</button>
                </form> 
        </div>
    </div>
    <div class="container">
        <div class="feedback-background">
            <div class="container-feedback-slider">
                <h2>Phản Hồi Khách Hàng</h2>
                
                <div class="feedback-slider">
                    @foreach($reviews as $review)
                        <div class="review-item">
                            <div class="review-icon">
                                <i class="fas fa-user-circle"></i> <!-- Icon của khách hàng -->
                            </div>

                            <div class="review-content">
                                <p>{{ $review->content }}</p> <!-- Nội dung đánh giá -->
                                
                                <div class="rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $review->rating)
                                            <span class="star filled">★</span> <!-- Sao được đánh giá -->
                                        @else
                                            <span class="star">★</span> <!-- Sao trống -->
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!--footer starts from here-->
 
    @endsection