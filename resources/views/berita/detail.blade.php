@extends('layouts.main')

@section('content')
<section class="counts section-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <p>Berita >> <a href="{{ $berita->slug }}">{{ $berita->judul }}</a></p>
                        <a href="#" type="button" class="btn btn-secondary btn-sm my-2">{{ $berita->kategori->kategori }}</a>
                        <h1>{{ $berita->judul }}</h1>

                        <div class="news-date mb-4">
                            <span class="mr-3"> <i class="bi bi-stopwatch-fill"></i> {{ $berita->created_at->diffForHumans() }}</span> |
                            <span class="mr-3"><i class="bi bi-person-circle"> {{ $berita->user->name }}</i></span> |
                            <span><i class="bi bi-fire">Dibaca {{ $berita->views }} Kali</i></span>
                        </div>
  
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Andalan" class="img-fluid rounded mb-5" style="height: 450px; width: 100%;">
                        <p>{!! $berita->body !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <h4>Berita Populer</h4>
                    <div class="populer-post mb-5">
                        @foreach ($beritaPopuler as $berita)
                            <div class="row mt-3">
                                <div class="col-md-5">
                                    <img src="{{ asset('storage/' . $berita->gambar) }}" width="100%" height="100%" style="border-radius: 5px">
                                </div>
                                <div class="col-md-7 mt-2">
                                    <a href="/berita/{{ $berita->slug }}" style="color: inherit;"><h6>{{ $berita->judul }}</h6></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <h4>Kategori</h4>
                    <div class="populer-post mb-5">
                        <div class="row mt-3">
                            <div class="col">
                                @foreach ($kategories as $kategori)
                                    <ul>
                                        <p><i class="bi bi-hash"></i> <a href="/kategori/{{ $kategori->slug }}" style="color: inherit;">{{ $kategori->kategori }}</a></p>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>     
    </div>
</section>
@endsection
