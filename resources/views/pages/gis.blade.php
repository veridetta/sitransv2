@extends('layouts/layoutMaster')

@section('title', $profile->name)

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/swiper/swiper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
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
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
@endsection

@section('page-script')
<script>
  var map = L.map('map').setView([0.924, 122.623], 7.22);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    minZoom: 7.22, // Set minimum zoom level
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Set the maximum bounds
map.setMaxBounds([
  [0.5, 122], // Southwest coordinates
  [1.3, 123]  // Northeast coordinates
]);

//muat geojson dari file
$.getJSON("{{asset('storage/maps/map.geojson')}}", function(json) {
  var kecamatan = L.geoJson(json, {
    style: function(feature) {
      return {
        color: 'blue',
        weight: 2,
        fillOpacity: 0.4
      };
    },
    onEachFeature: function(feature, layer) {
      var popupContent = "<b>Nama Trans:</b> " + feature.properties.Nama_Trans +
                         "<br><b>Provinsi:</b> " + feature.properties.Provinsi +
                         "<br><b>Kabupaten:</b> " + feature.properties.Kabupaten +
                         "<br><b>Kecamatan:</b> " + feature.properties.Kecamatan +
                         "<br><b>Desa:</b> " + feature.properties.Desa +
                         "<br><b>Tahun Temp:</b> " + feature.properties.Tahun_Temp +
                         "<br><b>Jumlah KK:</b> " + feature.properties.Jumlah_KK +
                         "<br><b>Jumlah Bid:</b> " + feature.properties.Jumlah_Bid +
                         "<br><b>Status HPL:</b> " + feature.properties.Status_HPL +
                         "<br><b>TPA:</b> " + feature.properties.TPA +
                         "<br><b>TPS:</b> " + feature.properties.TPS +
                         "<br><b>Luas Ha:</b> " + feature.properties.Luas_Ha +
                         "<br><b>X:</b> " + feature.properties.X +
                         "<br><b>Y:</b> " + feature.properties.Y +
                         "<br><b>Keterangan:</b> " + feature.properties.Keterangan +
                         "<br><b>Nama:</b> " + feature.properties.Nama +
                         "<br><b>Lahan:</b> " + feature.properties.LAHAN;
      layer.bindPopup(popupContent);
    }
  }).addTo(map);

  map.setView([0.924, 122.623], 7.22);
});
</script>
@endsection

@section('content')

<div class="row">
  <div class="row d-flex">
    <!-- Content-->
    <div class="col-md-9">
      <!-- Aplikasi Publik -->
      <div class="card">
        <div class="card-body">
          <h2 class="card-title">Transmigrasi Provinsi Gorontalo</h2>
          <div class="row d-flex justify-content-start">
            <div id="map"></div>
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

