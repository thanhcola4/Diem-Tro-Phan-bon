    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <!-- Contact form JavaScript -->
      <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script>
        $(document).ready(function() {
        $('.news-page-slider').on('init', function(event, slick) {    
        }).slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
   
    $(document).ready(function(){
        $('.feedback-slider').slick({
            infinite: true,           // Chạy slider vô hạn
            speed: 500,               // Tốc độ chuyển slide
            slidesToShow: 1,          // Hiển thị 1 slide
            slidesToScroll: 1,        // Scroll 1 slide một lần
            autoplay: true,           // Tự động chuyển slide
            autoplaySpeed: 3000,      // Thời gian mỗi slide
            arrows: true,             // Hiển thị nút chuyển slide
            fade: true,               // Hiệu ứng mờ khi chuyển slide
            prevArrow: '<button type="button" class="slick-prev">‹</button>', // Mũi tên trái
            nextArrow: '<button type="button" class="slick-next">›</button>', // Mũi tên phải
            fade: true,               // Hiệu ứng mờ khi chuyển slide
        });
        setInterval(function() {
        $('.feedback-slider').slick('slickNext'); // Chuyển đến slide tiếp theo
    }, 2000); // Cách nhau 2 giây
    });

</script>   