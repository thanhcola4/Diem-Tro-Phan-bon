@extends('layouts.user_type.auth')

@section('content')
<div class="container mt-5">
        <h2>Danh Sách Đánh Giá</h2>

        <ul class="list-group">
            @forelse($reviews as $review)
                <li class="list-group-item d-flex align-items-center">
                    <div class="star-rating mr-2">
                        @for($i = 5; $i >= 1; $i--)
                            <input type="radio" id="star{{ $i }}_{{ $review->id }}" name="rating{{ $review->id }}" value="{{ $i }}" {{ $i == $review->rating ? 'checked' : '' }} disabled />
                            <label for="star{{ $i }}_{{ $review->id }}" title="{{ $i }} sao">★</label>
                        @endfor
                    </div>
                    <strong>Nội dung:</strong>
                    <span class="ml-2">{{ $review->content }}</span>
                </li>
            @empty
                <li class="list-group-item">Chưa có đánh giá nào.</li>
            @endforelse
        </ul>
    </div>
@endsection