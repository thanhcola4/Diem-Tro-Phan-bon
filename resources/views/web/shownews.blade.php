@extends('web.index')

@section('shownews')

<div class="container text-center my-5">
    
    <h1 class="service-title">{{ $new->title }}</h1>
    <img src="{{ asset('storage/' . $new->image) }}" alt="{{ $new->title }}" class="img-fluid service-image">
    <p class="service-content">{!! $service->content !!}</p>
</div>

@endsection