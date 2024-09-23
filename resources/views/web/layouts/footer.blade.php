<footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Tìm chúng tôi</h5>
					<!--headin5_amrc-->
					<p class="mb10">Hãy liên hệ chúng tôi qua những phương tiện sau đây.</p>
					<p><i class="fa fa-location-arrow"></i> 1/1 Dương Văn Dương, Sơn Kỳ, Tân Phú   </p>
					<p><i class="fa fa-phone"></i> 0974212936 </p>
					<p><i class="fa fa fa-envelope"></i> huynhnguyen150400@gmail.com </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Theo dõi chúng tôi</h5>
					<!--headin5_amrc ends here-->
					<ul class="footer_ul2_amrc">
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Nguyễn Huỳnh<a href="https://www.facebook.com/profile.php?id=100021764200478">https://www.facebook.com/</a></p>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
							<p>Đặng Ngọc Nguyên<a href="https://www.facebook.com/dang.nguyen.1208">https://www.facebook.com/</a></p>
						</li>
						
					</ul>
					<!--footer_ul2_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Liên kết nhanh</h5>
					<!--headin5_amrc-->
					<ul class="footer_ul_amrc">
						<li><a href="about">Về chúng tôi</a></li>
						<li><a href="baiviet">Bài viết</a></li>
						<li><a href="lienhe">Liên hệ </a></li>
						
					</ul>
					<!--footer_ul_amrc ends here-->
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<h5 class="headin5_amrc col_white_amrc pt2">Bài viết gần đây</h5>
					<ul class="footer_ul_amrc">
						@foreach($recentPosts as $post)
							<li class="media">
								<div class="media-left">
									<img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" />
								</div>
								<div class="media-body">
									<p>{{ $post->title }}</p>
									<span>{{ $post->created_at->format('d M Y') }}</span>
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
        <div class="container">
            <div class="footer-logo">
				<a href="{{ url('/trangchu') }}"><img src="{{ asset('images/footer-logo.png') }}" alt="Footer Logo">
				</a>
			</div>
            <!--foote_bottom_ul_amrc ends here-->
            
            <!--social_footer_ul ends here-->
        </div>
    </footer>