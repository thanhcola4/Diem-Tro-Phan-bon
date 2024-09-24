@extends ('web.index')
   @section('news')

    <!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">TIN TỨC
			</h1>
		</div>
	</div>

    <!-- Page Content -->
<div class="container">
		
		@foreach ($newsItems as $news)
    <div class="container">
    <div class="project-inner">
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" />
                </a>
            </div>
            <div class="col-md-5">
                <h3>{{ $news->title }}</h3>
                <p>{!! Str::limit($news->content, 100) !!}</p>
                <a class="btn btn-primary" href="{{ route('webnew.show', $news->id) }}">Xem tin tức
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <!-- /.row -->
    </div>
   
</div>
@endforeach
   


	<div class="pagination_bar">
		{{ $newsItems->links('pagination::bootstrap-4') }} <!-- Sử dụng kiểu phân trang Bootstrap -->

		</div>
    </div>
	
	

	
    <!-- /.container -->
    @endsection