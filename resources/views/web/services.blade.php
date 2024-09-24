@extends ('web.index')
@section ('services')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">BÀI VIẾT
				
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		
		
		<div class="services-bar">
    <h1 class="my-4">BÀI VIẾT</h1>   
    <div class="row">
	@foreach($services as $service)
    <div class="col-lg-4 mb-4">
        <a href="{{ route('webservices.show', $service->id) }}" style="text-decoration: none;">
            <div class="card h-100 ">
                <div class="card-img">
                    <!-- Ảnh sản phẩm -->
                    <img class="img-fluid" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" style="width: 100%; height: auto; object-fit: cover;" />
                </div>
                <h4 class="textbox" style="text-align: center; font-weight: bold; margin-top: 10px;">
                    {{ $service->title }}
                </h4>
            </div>
        </a>
    </div>
@endforeach


</div>
		<!-- Our Customers -->
	

    </div>
    <!-- /.container -->
</div>

    <!--footer starts from here-->
    
  @endsection