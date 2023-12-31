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
  #map { height: 500px; }
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
  <div class="row d-flex">
    <!-- Content-->
    <div class="col-md-9">
      <!-- Aplikasi Publik -->
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Dokumentasi Kegiatan</h2>
          <div class="row d-flex justify-content-start">
            @for ($i=1;$i<5;$i++)
              <div class="col-6 p-4 h-100">
                <img src="{{$profile->server.'storage/images/dokumentasi/'.$i.'.jpg'}}" alt="" class="img-fluid">
              </div>
            @endfor
          </div>
        </div>
      </div>
      <!-- / Aplikasi Publik -->
    </div>
    <!-- / Content-->
    <!--  Siedbar -->
    @include('pages/sidebar_pages')
    <!-- / Siedbar -->
  </div>
</div>
@endsection

