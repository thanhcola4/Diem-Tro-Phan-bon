@extends ('web.index')
@section ('services')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Services
				<small>Subheading</small>
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="">Home</a>
				</li>
				<li class="breadcrumb-item active">Services</li>
			</ol>
		</div>

		<!-- Image Header -->
		<img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />

		<!-- Services Section -->
		<div class="services-bar">
    <h1 class="my-4">SẢN PHẨM</h1>   
    <div class="row">
	@foreach($services as $service)
    <div class="col-lg-4 mb-4">
        <div class="card h-100">
            <h4 class="card-header">
                <!-- Trigger Modal bằng liên kết -->
                <a href="#" data-toggle="modal" data-target="#productModal{{ $service->id }}">{{ $service->title }}</a>
            </h4>
            <div class="card-img">
                <!-- Ảnh sản phẩm -->
                <img class="img-fluid" src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" />
            </div>        
        </div>
    </div>

  


@endforeach


</div>
		<!-- Our Customers -->
	

    </div>
    <!-- /.container -->
</div>

    <!--footer starts from here-->
    
  @endsection