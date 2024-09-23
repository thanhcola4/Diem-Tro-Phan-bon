@extends('web.index')

@section('show')

<div class="container text-center my-5">
    
    <h1 class="service-title">{{ $service->title }}</h1>
    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid service-image">
    <p class="service-content">{!! $service->content !!}</p>
</div>

@endsection