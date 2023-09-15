@extends('layouts.main')

@section('container')

  {{-- Hero --}}
  @include('hero.detail_startup')

  <div class="row justify-content-center m-5">
    <div class="col-md-5">
        <h1 class="my-3" data-aos="fade-up" data-aos-delay="100">{{ $startup->title }}</h1>
        {{-- <p><small class="text-muted" data-aos="fade-up" data-aos-delay="200">{{ $startup->created_at->diffForHumans() }} --}}
        {{-- <a href="/startup/category={{ $startup->category->slug }}" class="text-decoration-none">{{ $startup->category->name }}</a> --}}
        </small></p>
        @if ($startup->image)   
            <div style="max-height: 1000px; overflow: hidden;">
            <img src="{{ asset('storage/' . $startup->image) }}" class="img-fluid" alt="image">
             </div>
        @endif
    </div>
    <div class="col-md-7">
        <article class="my-3 fs-5" data-aos="fade-up" data-aos-delay="100">
            {!! $startup->body !!}
        </article>
    </div>
    
    
    <div class="row justify-content-center">
        <div class="col-md-4">
            <a href="/startup" class="my-5" style="color: #0F3460; font-size: 18px; font-family: Arial Narrow Bold"
                data-aos="fade-up" data-aos-delay="100">
                <span class="bi bi-arrow-left"></span> Back
            </a>
        </div>
    </div>
    </div>

@endsection