@extends('layouts.main')

@section('content')
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $key => $slider)
        <div class="carousel-item{{ $key === 0 ? ' active' : '' }}" style="background-image: url({{ asset('storage/' . $slider->img_slider) }});">
          <div class="carousel-container">
            <div class="carousel-content container">
              <h2 class="animate__animated animate__fadeInDown">{{ $slider->judul }}</h2>
              <p class="animate__animated animate__fadeInUp">{{ $slider->deskripsi }}</p>
              <a href="{{ $slider->link_btn }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->


      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-bar-chart-line-fill"></i></div>
              <h4 class="title"><a href="">Statistik</a></h4>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-globe-asia-australia"></i></div>
              <h4 class="title"><a href="">Peta Desa</a></h4>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-shop"></i></div>
              <h4 class="title"><a href="">Bursa UMKM</a></h4>
            </div>
            <div class="col-lg-3 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class="bi bi-telephone-forward"></i></div>
              <h4 class="title"><a href="">Pengaduan</a></h4>
            </div>
          </div>
          
        </div>
      </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Berita Desa</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="count-box news-box">
              <img src="{{ asset('storage/img-slider/slide-1.jpg') }}" alt="Gambar Berita">
              <h5 class="news-title">Mahasiswa KKN UMPWR melakukan pelatihan penggunaan Website Sistem Informasi Desa</h5>
              <p class="news-description">Deskripsi berita atau informasi tambahan dapat ditambahkan di sini.</p>
              <div class="news-date">Tanggal Post : 11 September 2023</div>
              <div class="news-divider"></div>
              <button type="button" class="btn btn-link">Selengkapnya</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="count-box news-box">
              <img src="{{ asset('storage/img-slider/slide-2.jpg') }}" alt="Gambar Berita">
              <h5 class="news-title">pelatihan penggunaan Website Sistem Informasi Desa</h5>
              <p class="news-description">Deskripsi berita atau informasi tambahan dapat ditambahkan di sini.</p>
              <div class="news-date">Tanggal Post : 11 September 2023</div>
              <div class="news-divider"></div>
              <button type="button" class="btn btn-link">Selengkapnya</button>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="count-box news-box">
              <img src="{{ asset('storage/img-slider/slide-3.jpg') }}" alt="Gambar Berita">
              <h5 class="news-title">Mahasiswa KKN UMPWR melakukan pelatihan penggunaan Website Sistem Informasi Desa</h5>
              <p class="news-description">Deskripsi berita atau informasi tambahan dapat ditambahkan di sini.</p>
              <div class="news-date">Tanggal Post : 11 September 2023</div>
              <div class="news-divider"></div>
              <button type="button" class="btn btn-link">Selengkapnya</button>
            </div>
          </div>
          

          <div class="button" style="text-align: center">
            <a class="btn btn-primary mx-auto" href="/pengumuman" role="button">Lihat Semua</a>
          </div>
          
        </div>

      </div>
    </section><!-- End Counts Section -->
@endsection