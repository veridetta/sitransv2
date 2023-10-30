@extends('layouts/layoutMaster')

@section('title', $profile->name)

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/cards-advance.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/ui-carousel.css')}}" />
<style>
  .scrolling-text-container {
      overflow: hidden;
  }

  .scrolling-text {
      white-space: nowrap;
      animation: scrollText 20s linear infinite;
  }

  @keyframes scrollText {
      0% {
          transform: translateX(90%);
      }
      100% {
          transform: translateX(-90%);
      }
  }
</style>
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}">
</script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-carousel.js')}}"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <!-- FEATURED BANNER-->
    <div id="swiper-gallery">
      <div class="swiper gallery-top">
        <div class="swiper-wrapper">
          @foreach ($banner as $ban)
          <div class="swiper-slide isOpenUrl" link="{{$ban->url}}" style="background-image:url({{$profile->server.'storage/'.$ban->image}})"></div>
          @endforeach

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
      </div>
      <div class="swiper gallery-thumbs">
        <div class="swiper-wrapper">
          @foreach ($banner as $ban)
          <div class="swiper-slide" link="{{$ban->url}}" style="background-image:url({{$profile->server.'storage/'.$ban->image}})"></div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- /FEATURED BANNER-->
  </div>
  <!-- PENGUMUMAN -->
  <div class="alert alert-danger d-flex"  role="alert">
    <span class="alert-icon text-danger me-2">
      <i class="ti ti-bell ti-md"></i>
    </span>
    <div class="scrolling-text-container w-100 row justify-content-center ">
      <div class="scrolling-text my-auto">
        <p style="margin-bottom: 0;">
          @foreach ($announcement as $aa)
            <span class="mr-10">{{ strip_tags($aa->content) }}</span>
          @endforeach
        </p>

      </div>
    </div>
  </div>
  <!-- /PENGUMUMAN -->
  <div class="row d-flex">
    <!-- Content-->
    <div class="col-md-9 mb-4">
      <!-- Swiper -->
      <div class="swiper" id="swiper-big-article" style="padding:0px; height: 500px">
        <div class="swiper-wrapper">
          @foreach($swiper as $s)
            @if(!empty($s->content))
                @php
                    // Menggunakan regular expression untuk mengekstrak URL gambar pertama dari konten
                    preg_match('/<img[^>]+src="([^">]+)"/', $s->content, $matches);
                    $firstImage = $matches[1] ?? ''; // Ambil URL gambar pertama atau kosongkan jika tidak ada gambar
                @endphp
            @else
                @php
                    $firstImage = ''; // Setel ke kosong jika konten kosong
                @endphp
            @endif

            <div class="swiper-slide" style="padding: 0px;">
                <div class="card w-100 isOpenUrl" link="{{ route('news', ['slug' => $s->slug]) }}">
                    <div style="background-image: url('{{ $profile->server.$firstImage ? asset($firstImage) : asset('assets/img/elements/1.jpg') }}'); width: 100%; height: 320px; background-size: cover; background-position: center;"></div>
                    <div class="card-body text-start" style="height: 200px">
                        <h4 class="card-title mb-0"><a href="#">{{ Str::limit($s->title, 80, "...") }}</a></h4>
                        <small class="text-muted"><i class="fa fa-calendar"></i> {{ $s->date }}</small>
                        <p class="h6 card-text text-muted">{{ Str::limit(strip_tags($s->content), 120, "...") }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <div class="swiper-button-next swiper-button-white custom-icon">
        </div>
        <div class="swiper-button-prev swiper-button-white custom-icon">
        </div>
      </div>
      <!-- / Swiper -->
      <!-- Populer & Info Satker -->
      <div class="d-flex mt-4">
        <div class="col-md-6 p-2">
          <div class="card">
            <div class="card-body">
              <div class="divider divider-primary">
                <div class="divider-text"><h5>INFO SATKER</h5></div>
              </div>
              @foreach ($info as $article)
                @if(!empty($article->content))
                    @php
                        preg_match('/<img[^>]+src="([^">]+)"/', $article->content, $matches);
                        $firstImage = $matches[1] ?? ''; // Ambil URL gambar pertama atau kosongkan jika tidak ada gambar
                        if($firstImage == ""){
                          $firstImage = asset('assets/img/elements/1.jpg');
                        }else{
                          $firstImage=$firstImage;
                        }
                    @endphp
                @else
                    @php
                        $firstImage = ''; // Setel ke kosong jika konten kosong
                    @endphp
                @endif
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    <img src="{{$firstImage}}" alt="{{$article->slug}}" class="me-3" height="38">
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-7 mb-sm-0 mb-2">
                      <h6 class="mb-0 isOpenUrl" link="{{ route('news', ['slug' => $article->slug]) }}"><a href="#">{{Str::limit($article->title, 50, '...')}}</a></h6>
                      <small class="text-muted"><i class="fa fa-calendar"></i> {{$article->date}}</small>
                    </div>
                    <div class="col-5 text-end">
                      <button class="btn btn-label-secondary btn-icon waves-effect isOpenUrl" link="{{ route('news', ['slug' => $article->slug]) }}"><i class="ti ti-link ti-sm"></i></button>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-md-6 p-2">
          <div class="card">
            <div class="card-body">
              <div class="divider divider-primary">
                <div class="divider-text"><h5>POPULER</h5></div>
              </div>
              @foreach ($popular as $article)
                @if(!empty($article->content))
                    @php
                        preg_match('/<img[^>]+src="([^">]+)"/', $article->content, $matches);
                        $firstImage = $matches[1] ?? ''; // Ambil URL gambar pertama atau kosongkan jika tidak ada gambar
                        if($firstImage == ""){
                          $firstImage = asset('assets/img/elements/1.jpg');
                        }else{
                          $firstImage=$firstImage;
                        }
                    @endphp
                @else
                    @php
                        $firstImage = ''; // Setel ke kosong jika konten kosong
                    @endphp
                @endif
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    <img src="{{$firstImage}}" alt="{{$article->slug}}" class="me-3" height="38">
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-7 mb-sm-0 mb-2">
                      <h6 class="mb-0 isOpenUrl" link="{{ route('news', ['slug' => $article->slug]) }}"><a href="#">{{Str::limit($article->title, 50, '...')}}</a></h6>
                      <small class="text-muted"><i class="fa fa-calendar"></i> {{$article->date}}</small>
                    </div>
                    <div class="col-5 text-end">
                      <button class="btn btn-label-secondary btn-icon waves-effect isOpenUrl" link="{{ route('news', ['slug' => $article->slug]) }}"><i class="ti ti-link ti-sm"></i></button>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- / Populer & Info Satker -->
      <!-- Aplikasi Publik -->
      <div class="card mt-3">
        <div class="card-body">
          <div class="divider divider-primary">
            <div class="divider-text"><h5>APLIKASI PUBLIK</h5></div>
          </div>
          <div class="row d-flex justify-content-start">
            @foreach ($publicApp as $pub)
            <div class="isOpenUrl d-flex align-items-center flex-column col-md-2" link="{{$pub->url}}">
              <img class="img-fluid rounded-circle mb-3 pt-1 mt-4" src="{{$profile->server.'storage/'.$pub->image}}" height="80" width="80" alt="User avatar">
              <div class="user-info text-center">
                <h6 class="mb-2">{{$pub->title}}</h6>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- / Aplikasi Publik -->
      <!-- Aplikasi Internal -->
      <div class="card mt-3">
        <div class="card-body">
          <div class="divider divider-primary">
            <div class="divider-text"><h5>APLIKASI INTERNAL</h5></div>
          </div>
          <div class="row d-flex justify-content-start">
            @foreach ($internApp as $inter)
            <div class="isOpenUrl d-flex align-items-center flex-column col-md-2" link="{{$inter->url}}">
              <img class="img-fluid rounded-circle mb-3 pt-1 mt-4" src="{{$profile->server.'storage/'.$inter->image}}" height="80" width="80" alt="User avatar">
              <div class="user-info text-center">
                <h6 class="mb-2">{{$inter->title}}</h6>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- / Aplikasi Internal -->
    </div>
    <!-- / Content-->
    <!--  Siedbar -->
    @include('pages/sidebar')
    <!-- / Siedbar -->
  </div>
</div>
@endsection

