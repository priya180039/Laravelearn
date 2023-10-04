@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($list as $blog)
        <div class="col-lg-3 col-6 d-flex">
            <div class="card mt-3">
                <img src="{{ $blog->image }}" alt="" class="card-image-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <p class="card-text">{{ $blog->content }}</p>
                </div>
                <div class="card-body text-center d-flex">
                    <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-primary w-100 mt-auto">
                        Baca lagi
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
