@extends('layouts.main')

@section('container')
    {{-- Hero --}}
    @include('hero.prospect_single')

    <div class="row justify-content-center m-5">
        <div class="col-md-5">
            <h1 class="my-3" data-aos="fade-up" data-aos-delay="100">{{ $prospect->title }}</h1>
            {{-- <p><small class="text-muted" data-aos="fade-up" data-aos-delay="200">{{ $prospect->created_at->diffForHumans() }} --}}
            {{-- <a href="/prospect/category={{ $prospect->category->slug }}" class="text-decoration-none">{{ $prospect->category->name }}</a> --}}
            </small></p>
            @if ($prospect->image)
                <div style="max-height: 1000px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $prospect->image) }}" class="img-fluid"
                        alt="{{ $prospect->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $prospect->category->name }}" class="img-fluid"
                    alt="{{ $prospect->category->name }}">
            @endif
        </div>
        <div class="col-md-7">
            <article class="my-3 fs-5" data-aos="fade-up" data-aos-delay="100">
                {!! $prospect->body !!}
            </article>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="/" class="my-5" style="color: #0F3460; font-size: 18px; font-family: Arial Narrow Bold"
                    data-aos="fade-up" data-aos-delay="100">
                    <span class="bi bi-arrow-left"></span> Back
                </a>
            </div>
        </div>
    </div>
@endsection
