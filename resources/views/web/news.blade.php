@extends ('web.index')
   @section('news')

    <!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Tin tức
				<small>Subheading</small>
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="/trangchu">Trang chủ</a>
				</li>
				<li class="breadcrumb-item active">Tin tức</li>
			</ol>
		</div>
        <div class="container">
    @foreach ($newsItems as $news)
    <div class="project-inner">
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" />
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $news->title }}</h3>
                <p>{{ $news->content }}</p>
                <a class="btn btn-primary" href="{{ route('webnew.show', $news->id) }}">Xem tin tức
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    @endforeach
</div>
    <hr>


    <!-- Project Four -->
	
	
		<hr>

		<div class="pagination_bar">
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="#" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
		</div>
    </div>
    <!-- /.container -->
    @endsection