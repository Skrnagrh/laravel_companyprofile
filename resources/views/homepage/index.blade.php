@extends('layouts.main')

@section('container')

@include('hero.home')

<!-- About -->
<section id="about">
    <div class="m-5">
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="work-box">
                    <h1 style="font-size: 36px; font-family: Arial Narrow Bold p-3"><strong>A</strong>bout
                        <strong>M</strong>e
                    </h1>
                </div>
            </div>
            <div class="col-md-8">
                <p data-aos="fade-up" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Incidunt, neque saepe quo, nulla harum a officia minus rem aut laborum laboriosam tenetur quis
                    pariatur id consequuntur ea dicta unde. Similique temporibus aspernatur qui nam harum. Eveniet iste
                    temporibus quaerat ipsa quisquam voluptatum numquam distinctio minus, quod aperiam, expedita omnis
                    tempora.</p>
                <p data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Eaque beatae ipsum harum excepturi veritatis suscipit! Eaque nostrum corporis officiis ipsam tempore
                    ad doloribus deserunt rem amet magni. Dolore, ratione. Maiores ad consequuntur suscipit velit animi.
                </p>
                <p data-aos="fade-up" data-aos-delay="400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magni facere praesentium quae expedita, tempora harum eaque nihil, rerum repellendus ipsum alias
                    earum debitis consequuntur saepe aliquam odit repellat enim delectus corrupti! Commodi, molestias
                    culpa hic id alias dolorum illum exercitationem, aliquid, odio sit obcaecati provident.</p>
            </div>
        </div>
    </div>
</section>
<!-- Last About -->

<!-- Jobs Prospect -->
<section id="jobsprospect" class="komoditas">
    <div class="m-4 py-5">
        <div class="row justify-content-center text-center text-light">
            <div class="col" data-aos="fade-up" data-aos-delay="100">
                <h1 style="font-size: 36px; font-family: Arial Narrow Bold"><strong>J</strong>ob
                    <strong>P</strong>rospects
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($prospect as $prospect)
            <div class="col-md-3 mt-3">
                <div class="card text-bg-light" data-aos="fade-up" data-aos-delay="200">
                    <a href="/detail_prospect/{{ $prospect->slug }}" class="text-light">
                        @if ($prospect->image)
                        <img src="{{ asset('storage/' . $prospect->image) }}" class="card-img"
                            alt="{{ $prospect->category->name }}" style="max-height: 350px">
                        @else
                        <img src="/notfound.png" class="card-img" alt="{{ $prospect->category->name }}"
                            style="max-height: 350px">
                        @endif


                        <div class="card-img-overlay"
                            style="background-image: linear-gradient(to top right, #000000, #00000027,  #00000000)">
                            <h3 class="card-title">{{ $prospect->title }}</h3>
                            <p class="card-text">Selengkapnya <i class="bi bi-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Last Jobs Prospect-->

<!-- News -->
<section id="news">
    <div class="m-5">
        <div class="work-box">
            <div class="row mx-2 ">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <h1 style="font-size: 36px; font-family: Arial Narrow Bold"><strong>N</strong>ews</h1>
                </div>
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique commodi nostrum culpa
                        adipisci officiis, officia quas provident odit accusamus quidem sequi impedit laudantium? Iusto
                        nobis labore, omnis dignissimos porro dolore inventore in animi atque exercitationem quo nostrum
                        voluptate dolorem laboriosam eos perferendis quaerat! Rem numquam voluptate eum ipsum magnam.
                        Blanditiis?</p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            @foreach ($news as $news)
            <div class="col-md-4">
                <div class="work-box mt-3" data-aos="fade-up" data-aos-delay="100">

                    <a href="/news/{{ $news->slug }}">
                        <div div class="work-img">
                            @if ($news->image)
                            {{-- Untuk Gambar, Jika Ada Gambar Yang di Upload --}}
                            <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid"
                                alt="{{ $news->category->name }}">
                            @else
                            {{-- Jika Gambar Tidak di Upload Oleh User Maka Akan Menampilkan dari Unsplash --}}
                            <img src="https://source.unsplash.com/400x200?{{ $news->category->name }}"
                                class="card-img-top" alt="{{ $news->category->name }}">
                            @endif
                        </div>
                    </a>

                    <div class="work-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="w-title px-3 pt-2">{{ $news->title }}</h4>
                                <div class="w-more px-3 pb-3">
                                    <small class="text-muted">{{ $news->created_at->diffForHumans() }}</small>
                                </div>
                                {{-- <p class="card-text">{{ $news->excerpt }}</p> --}}
                                <div class="w-more px-3 pb-3">
                                    <a href="/news" class="text-decoration-none">Selengkapnya <span
                                            class="bi bi-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Last News -->


@endsection
