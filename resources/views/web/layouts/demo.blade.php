    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
      <!-- Contact form JavaScript -->
      <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    
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
    </script>



</script>   