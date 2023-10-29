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
@endsection

@section('content')

<div class="row">
  <div class="col-12">
    <div id="swiper-gallery">
      <div class="swiper gallery-top">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/2.jpg')}})">Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/1.jpg')}})">Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/3.jpg')}})">Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/4.jpg')}})">Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 5</div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
      </div>
      <div class="swiper gallery-thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/2.jpg')}})">Slide 1</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/1.jpg')}})">Slide 2</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/3.jpg')}})">Slide 3</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/4.jpg')}})">Slide 4</div>
          <div class="swiper-slide" style="background-image:url({{asset('assets/img/backgrounds/6.jpg')}})">Slide 5</div>
        </div>
      </div>
    </div>
  </div>
  <div class="alert alert-danger d-flex"  role="alert">
    <span class="alert-icon text-danger me-2">
      <i class="ti ti-bell ti-md"></i>
    </span>
    <div class="scrolling-text-container w-100 row justify-content-center ">
      <div class="scrolling-text my-auto">
        <p style="margin-bottom:0">Ini adalah pengumuman teks berjalan horizontal menggunakan Bootstrap 5.</p>
      </div>
    </div>
  </div>
  <div class="row d-flex">
    <div class="col-md-9 mb-4">
      <div class="swiper" id="swiper-with-arrows" style="padding:0px; height: 500px">
        <div class="swiper-wrapper">
          @foreach($lastArticle as $art)
            <div class="swiper-slide" style="padding:0px; ">
              <div class="card w-100">
                  <div style="background-image:url({{asset('assets/img/elements/1.jpg')}}); width: 100%; height: 320px; background-size: cover; background-position: center;"></div>
                  <div class="card-body text-start" style="height:200px">
                      <h4 class="card-title mb-0"><a href="#">{{ Str::limit($art->title, 80, "...") }}</a></h4>
                      <small class="text-muted"><i class="fa fa-calendar"></i> {{$art->date}}</small>
                      <p class="h6 card-text text-muted">{{ Str::limit(strip_tags( $art->content ), 120, "...") }}</p>
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
      <div class="d-flex mt-4">
        <div class="col-md-6 p-2">
          <div class="card">
            <div class="card-body">
              <div class="divider divider-primary">
                <div class="divider-text"><h5>INFO SATKER</h5></div>
              </div>
              @foreach ($lastArticle as $article)
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    <img src="../assets/img/icons/brands/facebook.png" alt="{{$article->slug}}" class="me-3" height="38">
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-7 mb-sm-0 mb-2">
                      <h6 class="mb-0"><a href="#">{{Str::limit($article->title, 50, '...')}}</a></h6>
                      <small class="text-muted"><i class="fa fa-calendar"></i> {{$article->date}}</small>
                    </div>
                    <div class="col-5 text-end">
                      <button class="btn btn-label-secondary btn-icon waves-effect"><i class="ti ti-link ti-sm"></i></button>
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
              @foreach ($lastArticle as $article)
                <div class="d-flex mb-3">
                  <div class="flex-shrink-0">
                    <img src="../assets/img/icons/brands/facebook.png" alt="{{$article->slug}}" class="me-3" height="38">
                  </div>
                  <div class="flex-grow-1 row">
                    <div class="col-7 mb-sm-0 mb-2">
                      <h6 class="mb-0"><a href="#">{{Str::limit($article->title, 50, '...')}}</a></h6>
                      <small class="text-muted"><i class="fa fa-calendar"></i> {{$article->date}}</small>
                    </div>
                    <div class="col-5 text-end">
                      <button class="btn btn-label-secondary btn-icon waves-effect"><i class="ti ti-link ti-sm"></i></button>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-center mb-3">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
            <li class="nav-item">
              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-within-card-active" aria-controls="navs-within-card-active" aria-selected="true">Berita Terkini</button>
            </li>
            <li class="nav-item"><button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-within-card-link" aria-controls="navs-within-card-link" aria-selected="false">Pengumuman</button>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content p-0 pt-4">
            <div class="tab-pane fade show active" id="navs-within-card-active" role="tabpanel">
              @foreach ($lastArticle as $article)
              <div class="d-flex mb-3">
                <div class="flex-shrink-0">
                  <img src="../assets/img/icons/brands/facebook.png" alt="{{$article->slug}}" class="me-3" height="38">
                </div>
                <div class="flex-grow-1 row">
                  <div class="col-7 mb-sm-0 mb-2">
                    <h6 class="mb-0"><a href="#">{{Str::limit($article->title, 50, '...')}}</a></h6>
                    <small class="text-muted"><i class="fa fa-calendar"></i> {{$article->date}}</small>
                  </div>
                  <div class="col-5 text-end">
                    <button class="btn btn-label-secondary btn-icon waves-effect"><i class="ti ti-link ti-sm"></i></button>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="tab-pane fade" id="navs-within-card-link" role="tabpanel">
              <h4 class="card-title">Belum ada pengumuman</h4>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="divider divider-primary">
            <div class="divider-text"><h5>BANTUAN</h5></div>
          </div>
          <p class="text-muted">Belum ada informasi</p>
        </div>
      </div>
      <div class="card mt-3">
        <div class="card-body">
          <div class="divider divider-primary">
            <div class="divider-text"><h5>Cuitan Terbaru</h5></div>
          </div>
          <blockquote class="twitter-tweet">
              <p lang="en" dir="ltr">Ini adalah contoh tweet dari @kominfo. #ContohTweet</p>
              <a href="https://twitter.com/kominfo/status/123456789012345678" target="_blank">Lihat Tweet</a>
          </blockquote>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
        </div>
      </div>
    </div>
    
  </div>
</div>
@endsection
