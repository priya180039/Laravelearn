@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-8 card">
            <img src="{{ $blog->image }}" alt="" class="w-100">
            <div class="card-body">
                <h5 class="card-title">{{ $blog->title }}</h5>
                <p class="card-text">{{ $blog->content }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
