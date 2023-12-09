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
  .table-header-bold {
    font-weight: bold;
    text-align: center;
    vertical-align: middle;
  }
  .desa{
    font-weight: bold;
    padding-left: 11px;
    vertical-align: middle;
  }
  .akhir{
    text-align: end;
  }
  .table-vertical-center {
    vertical-align: middle;
    border: 1px solid #000000 !important;
  }
  .bg-biru{
    background-color: #cfe2ff !important;
  }
  .bg-hijau{
    background-color: #d4edda !important;
  }
  .bg-merah{
    background-color: #f8d7da !important;
  }
  .table-fi{
    table-layout: fixed;
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
  <div class="row d-flex">
    <!-- Content-->
    <div class="col-md-9">
      <!-- Aplikasi Publik -->
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-center">BEBAN TUGAS SERTIPIKAT HAK MILIK</h2>
          <h4 class="text-center">PROVINSI GORONTALO</h4>
          <h4 class="text-center">EDISI TAHUN 2023</h4>
          <div class="table-responsive justify-content-start">
            <table class="table table-vertical-center table-bordered table-hover">
              <thead>
                <tr class="table-header-bold">
                  <td rowspan="4">No</td>
                  <td rowspan="4" colspan="2">KABUPATEN / LOKASI</td>
                  <td rowspan="4">POLA</td>
                  <td rowspan="4">TAHUN PATAN</td>
                  <td rowspan="4">JUMLAH KK</td>
                  <td rowspan="4">Jumlah Bidang</td>
                  <td rowspan="2" colspan="3">BEBAN TUGAS SHM (BIDANG)</td>
                  <td rowspan="1" colspan="6">STATUS HPL (BIDANG)</td>
                  <td rowspan="4">Sertipikat HPL</td>
                  <td rowspan="2" colspan="12">PERMASALAHAN LAHAN</td>
                  <td rowspan="4">TAHUN IPL</td>
                  <td rowspan="4">KETERANGAN</td>
                </tr>
                <tr class="table-header-bold">
                  <td rowspan="1" colspan="3">BINA</td>
                  <td rowspan="1" colspan="3">SEJARAH</td>
                </tr>
                <tr class="table-header-bold">
                  <td rowspan="2">TARGET</td>
                  <td rowspan="2">REALISASI</td>
                  <td rowspan="2">SISA</td>
                  <td rowspan="2">BLM</td>
                  <td rowspan="2">SDH</td>
                  <td rowspan="2">JML</td>
                  <td rowspan="2">BLM</td>
                  <td rowspan="2">SDH</td>
                  <td rowspan="2">JML</td>
                  <td rowspan="1" colspan="2">MASYARAKAT</td>
                  <td rowspan="1" colspan="2">PERUSAHAAN</td>
                  <td rowspan="1" colspan="2">TDK ADA LAHAN</td>
                  <td rowspan="1" colspan="2">KWS HUTAN</td>
                  <td rowspan="1" colspan="2">KASUS LAIN</td>
                  <td rowspan="1" colspan="2">CLEAR</td>
                </tr>
                <tr class="table-header-bold">
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                  <td rowspan="1">BDG</td>
                  <td rowspan="1">UPT</td>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-warning">
                  @for ($i=1; $i<31; $i++)
                    <td class="text-center" @if($i==2) colspan="2" @endif>{{$i}}</td>
                  @endfor
                </tr>
                <!-- GORONTALO-->
                <tr>
                  <td rowspan="19">I</td>
                  <td class="font-weight-bold" colspan="30">KAB. GORONTALO</td>
                </tr>
                <!-- 1 DESA PUNCAK -->
                <tr>
                  <td class="desa bg-biru" rowspan="2" colspan="2">1. Ds. Puncak</td>
                  <td rowspan="2" class="bg-biru text-center">TU-TPLK</td>
                  <td rowspan="1" class="bg-biru text-center">2009</td>
                  <td rowspan="1" class="bg-biru akhir">125</td>
                  <td rowspan="2" class="akhir bg-biru">825</td>
                  <td rowspan="1" class="bg-biru akhir">375</td>
                  <td rowspan="2" class="akhir bg-biru">401</td>
                  <td rowspan="2" class="akhir bg-biru">302</td>
                  <td rowspan="2" class="bg-biru">-</td>
                  <td rowspan="2" class="bg-biru">-</td>
                  <td rowspan="2" class="bg-biru">-</td>
                  <td rowspan="2" class="akhir bg-biru">302</td>
                  <td rowspan="2" class="bg-biru">-</td>
                  <td rowspan="2" class="akhir bg-biru">302</td>
                  <td rowspan="2" class="text-center bg-biru">Tidak</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">21</td>
                  <td class="akhir bg-biru">1</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td rowspan="2" class="akhir bg-biru">281</td>
                  <td rowspan="2" class="akhir bg-biru">1</td>
                  <td rowspan="2" class="text-center bg-biru">2018</td>
                  <td rowspan="5" class="text-nowrap">
                    <p class="m-0 ">262 bidang terbit tahun 2020</p>
                    <p class="m-0">61 KK dikompensasi sapi penempatan tahun 2011</p>
                    <p class="m-0">Target SHM 442 Bidang di tahun 2024</p>
                    <p class="m-0">139 Bidang Tahun 2021 SHM</p>
                    <p class="m-0">21 Masuk di Perusahaan Sawit</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2011</td>
                  <td class="akhir">150</td>
                  <td class="akhir">450</td>
                  <td class="akhir">-</td>
                  <td class="akhir">1</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Pulubala</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Puncak</td>
                </tr>
                <!-- 2 BUKIT AREN -->
                <tr>
                  <td class="desa bg-biru" rowspan="3" colspan="2">2. Bukit Aren</td>
                  <td rowspan="3" class="bg-biru text-center">TU-TPLK</td>
                  <td rowspan="1" class="bg-biru text-center">2016</td>
                  <td rowspan="1" class="bg-biru akhir">75</td>
                  <td rowspan="3" class="akhir bg-biru">450</td>
                  <td rowspan="1" class="bg-biru akhir">225</td>
                  <td rowspan="3" class="akhir bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">225</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">450</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">450</td>
                  <td rowspan="3" class="text-center bg-biru">Tidak</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">450</td>
                  <td rowspan="3" class="akhir bg-biru">1</td>
                  <td rowspan="3" class="text-center bg-biru">2022</td>
                  <td rowspan="6" class="text-nowrap">
                    <p class="m-0 ">261 Bidang Target 2023 untuk SHM</p>
                    <p class="m-0">55 LU I Belum Clear and Clean</p>
                    <p class="m-0">134 LU 2 Belum Clear and Clean</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2017</td>
                  <td class="akhir">50</td>
                  <td class="akhir">150</td>
                  <td class="akhir">-</td>
                  <td class="akhir">150</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2018</td>
                  <td class="akhir">25</td>
                  <td class="akhir">75</td>
                  <td class="akhir">-</td>
                  <td class="akhir">75</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Pulubala</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Bukit Aren</td>
                </tr>
                <!-- AYUMOLINGO -->
                <tr>
                  <td class="desa bg-biru" rowspan="3" colspan="2">3. Ayumolingo</td>
                  <td rowspan="3" class="bg-biru text-center">TU-TPLK</td>
                  <td rowspan="1" class="bg-biru text-center">2013</td>
                  <td rowspan="1" class="bg-biru akhir">100</td>
                  <td rowspan="3" class="akhir bg-biru">825</td>
                  <td rowspan="1" class="bg-biru akhir">300</td>
                  <td rowspan="3" class="akhir bg-biru">414</td>
                  <td rowspan="3" class="akhir bg-biru">411</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">411</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">411</td>
                  <td rowspan="3" class="text-center bg-biru">Tidak</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">275</td>
                  <td class="akhir bg-biru">1</td>
                  <td class="akhir bg-biru">38</td>
                  <td class="akhir bg-biru">1</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">98</td>
                  <td rowspan="3" class="akhir bg-biru">1</td>
                  <td rowspan="3" class="text-center bg-biru">2018</td>
                  <td rowspan="6" class="text-nowrap">
                    <p class="m-0 ">180 bidang terbit SHM dan 3 Fasilitas umum 2020</p>
                    <p class="m-0">38 Bidang  masuk kawasan Hutan HPT</p>
                    <p class="m-0">Target SHM 303 Bidang di tahun 2024</p>
                    <p class="m-0">128 Bidang Tahun 2021 SHM</p>
                    <p class="m-0">104 Bidang Tahun 2022 SHM</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2015</td>
                  <td class="akhir">150</td>
                  <td class="akhir">450</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2016</td>
                  <td class="akhir">25</td>
                  <td class="akhir">75</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Pulubala</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Ayumolingo</td>
                </tr>
                <!--TOTAL-->
                <tr>
                  <td colspan="2" class="text-center">TOTAL I</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">700</td>
                  <td class="akhir desa">2,100</td>
                  <td class="akhir desa">2,100</td>
                  <td class="akhir desa">815</td>
                  <td class="akhir desa">1,163</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">1,163</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">1,163</td>
                  <td></td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">21</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">275</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">38</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">829</td>
                  <td class="akhir desa">3</td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- KAB POHUWATO -->
                <tr>
                  <td rowspan="15">II</td>
                  <td class="font-weight-bold" colspan="30">KAB. POHUWATO</td>
                </tr>
                <!--MARISA-->
                <tr>
                  <td class="desa bg-hijau" colspan="2">4. Marisa VI/SP.4</td>
                  <td class="bg-hijau text-center">TU-TPLK</td>
                  <td  class="bg-hijau text-center">2002/1</td>
                  <td rowspan="1" class="bg-hijau akhir">200</td>
                  <td rowspan="1" class="akhir bg-hijau">400</td>
                  <td rowspan="1" class="bg-hijau akhir">400</td>
                  <td rowspan="1" class="akhir bg-hijau">400</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">400</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">400</td>
                  <td rowspan="1" class="text-center bg-hijau">Tidak</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="text-center bg-hijau">2017</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">74/HPL/BPN/98</p>
                    <p class="m-0 ">sdh terbit SHM di tahun 2017 </p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Taluditi</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Puncak Jaya</td>
                </tr>
                <!-- SANDALAN -->
                <tr>
                  <td class="desa bg-biru" rowspan="3" colspan="2">5. Sandalan</td>
                  <td rowspan="3" class="bg-biru text-center">TULK</td>
                  <td rowspan="1" class="bg-biru text-center">2016</td>
                  <td rowspan="1" class="bg-biru akhir">100</td>
                  <td rowspan="3" class="akhir bg-biru">495</td>
                  <td rowspan="3" class="bg-biru akhir">495</td>
                  <td rowspan="3" class="akhir bg-biru">380</td>
                  <td rowspan="3" class="akhir bg-biru">115</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">115</td>
                  <td rowspan="3" class="bg-biru">115</td>
                  <td rowspan="3" class="akhir bg-biru">-</td>
                  <td rowspan="3" class="bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">-</td>
                  <td rowspan="3" class="text-center bg-biru">Ada</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">94</td>
                  <td class="akhir bg-biru">1</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td rowspan="3" class="akhir bg-biru">21</td>
                  <td rowspan="3" class="akhir bg-biru">1</td>
                  <td rowspan="3" class="text-center bg-biru">2018</td>
                  <td rowspan="6" class="text-nowrap">
                    <p class="m-0 ">HPL No 185 Tahun 2019 dengan luas 5.555</p>
                    <p class="m-0">Sudah terbit tahun 2021 sebanyak 256 bidang</p>
                    <p class="m-0">Sudah terbit tahun 2022 sebanyak 79 bidang</p>
                    <p class="m-0">Sudah terbit tahun 2023 sebanyak 45 bidang</p>
                    <p class="m-0">94 bidang Masuk HPK</p>
                    <p class="m-0">"Sisa beban SHM sebanyak 21 Bidang Target SHM di tahun 2023 sebanyak 16 Bidang"</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2018</td>
                  <td class="akhir">40</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2019</td>
                  <td class="akhir">25</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                  <td class="akhir">-</td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Taluditi</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Panca Karsa I</td>
                </tr>
                <!--6 MARISA-->
                <tr>
                  <td class="desa bg-hijau" colspan="2">6. Marisa V/B/MakartiJaya</td>
                  <td class="bg-hijau text-center">TU-TPLK</td>
                  <td  class="bg-hijau text-center">2011</td>
                  <td rowspan="1" class="bg-hijau akhir">100</td>
                  <td rowspan="1" class="akhir bg-hijau">300</td>
                  <td rowspan="1" class="bg-hijau akhir">300</td>
                  <td rowspan="1" class="akhir bg-hijau">300</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">300</td>
                  <td rowspan="1" class="bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">300</td>
                  <td rowspan="1" class="text-center bg-hijau">Tidak</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="akhir bg-hijau">-</td>
                  <td rowspan="1" class="text-center bg-hijau">2017</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">93/HPL/BPN/98, telah terbit SHM tahun 2017</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Taluditi</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Makarti Jaya</td>
                </tr>
                <!--TOTAL-->
                <tr>
                  <td colspan="3" class="text-center">TOTAL II</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">465</td>
                  <td class="akhir desa">1,195</td>
                  <td class="akhir desa">1,195</td>
                  <td class="akhir desa">1,080</td>
                  <td class="akhir desa">115</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">115</td>
                  <td class="akhir desa">115</td>
                  <td class="akhir desa">700</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">700</td>
                  <td class="akhir desa">-</td>
                  <td>-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">94</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">21</td>
                  <td class="akhir desa">1</td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- KAB BOALEMO -->
                <tr>
                  <td rowspan="39">III</td>
                  <td class="font-weight-bold" colspan="30">KAB. BOALEMO</td>
                </tr>
                <!-- 7 -->
                <tr>
                  <td class="desa" colspan="2">7. TSM Ds Pangea/ Bualo Ilomono</td>
                  <td class="text-center">TSM</td>
                  <td  class="text-center">2010</td>
                  <td rowspan="1" class="akhir">250</td>
                  <td rowspan="1" class="akhir ">750</td>
                  <td rowspan="1" class="akhir">750</td>
                  <td rowspan="1" class="akhir ">750</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">750</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">750</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2019</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sudah Terbit SHM</p>
                    <p class="m-0 ">Tahun 2020</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Wonosari dan Paguyaman </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Pangea dan Bualo </td>
                </tr>
                <!-- 8 -->
                <tr>
                  <td class="desa " colspan="2">8.  TSM Bualo Beringin Jaya</td>
                  <td class="text-center">TSM</td>
                  <td  class="text-center">2011</td>
                  <td rowspan="1" class="akhir">100</td>
                  <td rowspan="1" class="akhir ">300</td>
                  <td rowspan="1" class="akhir">300</td>
                  <td rowspan="1" class="akhir ">300</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2021</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sudah Terbit SHM</p>
                    <p class="m-0 ">Tahun 2020</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Paguyaman </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Bualo </td>
                </tr>
                <!-- 9 -->
                <tr>
                  <td class="desa " colspan="2">9. TSM Bongo IV Mootilango</td>
                  <td class="text-center">TSM</td>
                  <td  class="text-center">2009</td>
                  <td rowspan="1" class="akhir">100</td>
                  <td rowspan="1" class="akhir ">300</td>
                  <td rowspan="1" class="akhir">300</td>
                  <td rowspan="1" class="akhir ">300</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2019</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sudah Terbit SHM</p>
                    <p class="m-0 ">Tahun 2020</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Paguyaman </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Bongo IV </td>
                </tr>
                <!-- 10 -->
                <tr>
                  <td class="desa " colspan="2">10. Pangea Sp. 1</td>
                  <td class="text-center">TU-PLK</td>
                  <td  class="text-center">2005</td>
                  <td rowspan="1" class="akhir">200</td>
                  <td rowspan="1" class="akhir ">600</td>
                  <td rowspan="1" class="akhir">600</td>
                  <td rowspan="1" class="akhir ">600</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2018</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sudah Terbit SHM</p>
                    <p class="m-0 ">Tahun 2020</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Wonosari </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Saritani </td>
                </tr>
                <!-- 11 -->
                <tr>
                  <td class="desa " colspan="2">11. Pangea Sp. 2</td>
                  <td class="text-center">TU-PLK</td>
                  <td  class="text-center">2006/2009</td>
                  <td rowspan="1" class="akhir">400</td>
                  <td rowspan="1" class="akhir ">1,200</td>
                  <td rowspan="1" class="akhir">1,200</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">1,200</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">1,200</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">1,200</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">37</td>
                  <td class="akhir ">1</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">913</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2018</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">37 Bidang Masuk Kawasan Hutan Lindung</p>
                    <p class="m-0 ">250 Bidang Masuk HPK</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Wonosari </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Pangea </td>
                </tr>
                <!-- 12  -->
                <tr>
                  <td class="desa bg-biru" rowspan="3" colspan="2">12. Pangea Sp. 3</td>
                  <td rowspan="3" class="bg-biru text-center">TU-PLK</td>
                  <td rowspan="1" class="bg-biru text-center">2015</td>
                  <td rowspan="1" class="bg-biru akhir">150</td>
                  <td rowspan="1" class="akhir bg-biru">450</td>
                  <td rowspan="1" class="bg-biru akhir">450</td>
                  <td rowspan="1" class="akhir bg-biru">172</td>
                  <td rowspan="1" class="akhir bg-biru">278</td>
                  <td rowspan="1" class="bg-biru">-</td>
                  <td rowspan="1" class="bg-biru">278</td>
                  <td rowspan="1" class="bg-biru">278</td>
                  <td rowspan="1" class="akhir bg-biru">-</td>
                  <td rowspan="1" class="bg-biru">-</td>
                  <td rowspan="1" class="akhir bg-biru">-</td>
                  <td rowspan="1" class="text-center bg-biru"></td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td rowspan="1" class="akhir bg-biru">278</td>
                  <td rowspan="1" class="akhir bg-biru">1</td>
                  <td rowspan="1" class="text-center bg-biru"></td>
                  <td rowspan="6" class="text-nowrap">
                    <p class="m-0 ">Sertipikat sdh terbit LP 91 bidang tahun 2017</p>
                    <p class="m-0">LU I sudah terbit 57 Bidang tahun 2018</p>
                    <p class="m-0">24 bidang terbit SHM tahun 2019</p>
                    <p class="m-0">278 Bidang Target SHM di tahun 2024</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2016</td>
                  @for ($i=0;$i<25;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2019</td>
                  @for ($i=0;$i<25;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Wonosari</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Saritani</td>
                </tr>
                <!-- 13 -->
                <tr>
                  <td class="desa " colspan="2">13.  Pangea Sp. 4 /KTM Pawonsari</td>
                  <td class="text-center">TPLK</td>
                  <td  class="text-center">2010/2011</td>
                  <td rowspan="1" class="akhir">200</td>
                  <td rowspan="1" class="akhir ">600</td>
                  <td rowspan="1" class="akhir">600</td>
                  <td rowspan="1" class="akhir ">382</td>
                  <td rowspan="1" class="akhir ">218</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">218</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">218</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">218</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2019</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sebagian LU II sudah kompensasi sapi APBD</p>
                    <p class="m-0 "></p>
                    <p class="m-0 ">104/HPL/KEM-ATR/BPN/2017</p>
                    <p class="m-0 ">189 bidang terbit tahun 2018</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Wonosari </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Saritani </td>
                </tr>
                <!-- 14 -->
                <tr>
                  <td class="desa " colspan="2">14. Pangea Sp. 6</td>
                  <td class="text-center">TPLK</td>
                  <td  class="text-center">2011/2012</td>
                  <td rowspan="1" class="akhir">250</td>
                  <td rowspan="1" class="akhir ">750</td>
                  <td rowspan="1" class="akhir">750</td>
                  <td rowspan="1" class="akhir ">537</td>
                  <td rowspan="1" class="akhir ">213</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">213</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">213</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">213</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2019</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Sudah Terbit 537 SHM</p>
                    <p class="m-0 ">346 di Desa Bongo IV</p>
                    <p class="m-0 ">191 di Desa Huwongo</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Paguyaman </td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:   Huwongo/Bongo IV </td>
                </tr>
                <!-- 15 -->
                <tr>
                  <td class="desa " colspan="2">15. Lito SP.1 / Lito</td>
                  <td class="text-center">Nelayan</td>
                  <td  class="text-center">2014/2015/2016</td>
                  <td rowspan="1" class="akhir">186</td>
                  <td rowspan="1" class="akhir ">372</td>
                  <td rowspan="1" class="akhir">372</td>
                  <td rowspan="1" class="akhir ">155</td>
                  <td rowspan="1" class="akhir ">217</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">217</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">217</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">217</td>
                  <td rowspan="1" class="akhir ">1</td>
                  <td rowspan="1" class="text-center ">2019</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 ">Masih dalam tahap identifikasi dan verifikasi Dinas</p>
                    <p class="m-0 ">sudah terbit SHM 155 bidang tahun 2022</p>
                    <p class="m-0 ">melalui Redis</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Paguyaman Pantai</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:   Lito</td>
                </tr>
                <!--TOTAL-->
                <tr>
                  <td colspan="2" class="text-center">TOTAL III</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">1,836</td>
                  <td class="akhir desa">5,322</td>
                  <td class="akhir desa">5,322</td>
                  <td class="akhir desa">3,196</td>
                  <td class="akhir desa">2,126</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">278</td>
                  <td class="akhir desa">278</td>
                  <td class="akhir desa">2,598</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">2,598</td>
                  <td class="akhir desa">-</td>
                  <td>-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">287</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">1,839</td>
                  <td class="akhir desa">9</td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- KAB. BONE BOLANGO -->
                <tr>
                  <td rowspan="5">IV</td>
                  <td class="font-weight-bold" colspan="30">KAB. BONE BOLANGO</td>
                </tr>
                <!-- 16 -->
                <tr>
                  <td class="desa bg-merah" colspan="2">16. Owata</td>
                  <td class="bg-merah text-center">TU-TPLK</td>
                  <td  class="bg-merah text-center">2005</td>
                  <td rowspan="1" class="bg-merah akhir">100</td>
                  <td rowspan="1" class="akhir bg-merah">300</td>
                  <td rowspan="1" class="bg-merah akhir">300</td>
                  <td rowspan="1" class="akhir bg-merah">-</td>
                  <td rowspan="1" class="akhir bg-merah">300</td>
                  <td rowspan="1" class="bg-merah">-</td>
                  <td rowspan="1" class="bg-merah">-</td>
                  <td rowspan="1" class="bg-merah">-</td>
                  <td rowspan="1" class="akhir bg-merah">300</td>
                  <td rowspan="1" class="bg-merah">-</td>
                  <td rowspan="1" class="akhir bg-merah">300</td>
                  <td rowspan="1" class="text-center bg-merah"></td>
                  <td class="akhir bg-merah">300</td>
                  <td class="akhir bg-merah">1</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td class="akhir bg-merah">-</td>
                  <td rowspan="1" class="akhir bg-merah">300</td>
                  <td rowspan="1" class="akhir bg-merah">-</td>
                  <td rowspan="1" class="text-center bg-merah">2002</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 "> Lokasi Transmigrasi sudah menjadi PSN Bendung</p>
                    <p class="m-0 "> IPL dilakukan oleh pihak Pemerintah </p>
                    <p class="m-0 "> Status Lahan dalam proses pembayaran</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Bulango Ulu</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Owata</td>
                </tr>
                <!--TOTAL-->
                <tr>
                  <td colspan="3" class="text-center">TOTAL IV</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">100</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">-</td>
                  <td>300</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">300</td>
                  <td class="akhir desa">-</td>
                  <td></td>
                  <td></td>
                </tr>
                <!-- KAB. GORONTALO UTARA -->
                <tr>
                  <td rowspan="18">V</td>
                  <td class="font-weight-bold" colspan="30">KAB. GORONTALO UTARA</td>
                </tr>
                <!-- 17 -->
                <tr>
                  <td class="desa " colspan="2">17.  Imana  Ex UPT</td>
                  <td class="text-center">TU-TPLK</td>
                  <td  class="text-center">2002-2003</td>
                  <td rowspan="1" class="akhir">150</td>
                  <td rowspan="1" class="akhir ">450</td>
                  <td rowspan="1" class="akhir">450</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">450</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">450</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">450</td>
                  <td rowspan="1" class="text-center ">-</td>
                  <td class="akhir ">450</td>
                  <td class="akhir ">1</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="text-center ">2024</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 "> Tumpang tindih dengan sertipikat pencetakan sawah </p>
                    <p class="m-0 "> tahun 1984 sebanyak 100 Bidang </p>
                    <p class="m-0 "> Sertipikat No. 5 Tahun 1999 </p>
                    <p class="m-0 "> sudah terbit SK HPL tahun 1998 luas 1000 Ha</p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Atinggola</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Imana</td>
                </tr>
                <!-- 18  -->
                <tr>
                  <td class="desa bg-biru" rowspan="6" colspan="2">18. Motihelumo</td>
                  <td rowspan="6" class="bg-biru text-center">TU-TPLK</td>
                  <td rowspan="1" class="bg-biru text-center">2016</td>
                  <td rowspan="1" class="bg-biru akhir">25</td>
                  <td rowspan="6" class="bg-biru akhir">377</td>
                  <td rowspan="6" class="akhir bg-biru">377</td>
                  <td rowspan="6" class="bg-biru akhir">158</td>
                  <td rowspan="6" class="akhir bg-biru">219</td>
                  <td rowspan="1" class="bg-biru">-</td>
                  <td rowspan="1" class="bg-biru">219</td>
                  <td rowspan="1" class="bg-biru">219</td>
                  <td rowspan="1" class="akhir bg-biru">-</td>
                  <td rowspan="1" class="bg-biru">-</td>
                  <td rowspan="1" class="akhir bg-biru">-</td>
                  <td rowspan="1" class="text-center bg-biru">Ada</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru">-</td>
                  <td class="akhir bg-biru"></td>
                  <td class="akhir bg-biru">140</td>
                  <td class="akhir bg-biru">1</td>
                  <td rowspan=" " class="akhir bg-biru">79</td>
                  <td rowspan="6" class="akhir bg-biru">1</td>
                  <td rowspan="1" class="text-center bg-biru">2021</td>
                  <td rowspan="9" class="text-nowrap">
                    <p class="m-0 ">Sertipikat sdh terbit LP 91 bidang tahun 2017</p>
                    <p class="m-0">LU I sudah terbit 57 Bidang tahun 2018</p>
                    <p class="m-0">24 bidang terbit SHM tahun 2019</p>
                    <p class="m-0">278 Bidang Target SHM di tahun 2024</p>
                  </td>
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2017</td>
                  <td rowspan="1" class="akhir">50</td>
                  @for ($i=0;$i<18;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2018</td>
                  <td rowspan="1" class="akhir">25</td>
                  @for ($i=0;$i<18;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2019</td>
                  <td rowspan="1" class="akhir">25</td>
                  @for ($i=0;$i<18;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2021</td>
                  <td rowspan="1" class="akhir">9</td>
                  @for ($i=0;$i<18;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <tr class="bg-biru">
                  <td class="text-center">2022</td>
                  <td rowspan="1" class="akhir">11</td>
                  @for ($i=0;$i<18;$i++)
                  <td class="akhir">-</td>
                  @endfor
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">: Sumalata Timur</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">: Motihelumo</td>
                </tr>
                <!-- 19 -->
                <tr>
                  <td class="desa " colspan="2">19.  Sumalata IV/Bulontio Timur</td>
                  <td class="text-center">TU-TPLK</td>
                  <td  class="text-center">2011</td>
                  <td rowspan="1" class="akhir">75</td>
                  <td rowspan="1" class="akhir ">75</td>
                  <td rowspan="1" class="akhir">75</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">75</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">75</td>
                  <td rowspan="1" class="">-</td>
                  <td rowspan="1" class="akhir ">75</td>
                  <td rowspan="1" class="text-center ">Tidak</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">75</td>
                  <td class="akhir ">1</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="akhir ">-</td>
                  <td rowspan="1" class="text-center ">2023</td>
                  <td rowspan="4" class="text-nowrap">
                    <p class="m-0 "> LP tumpang tindih dengan Eks.HGU PT. BSI</p>
                    <p class="m-0 "> Sudah Dilaksanakan Kegiatan IPL di tahun 2023</p>
                    <p class="m-0 "> Bertambah 7 Rumah di Lokasi Transmigrasi</p>
                    <p class="m-0 "> Target SHM di Tahun 2024 sebanyak 75 Bidang </p>
                  </td>
                </tr>
                <!--KAWASAN-->
                <tr>
                  <td>Kawasan</td>
                  <td colspan="28">: </td>
                </tr>
                <tr>
                  <td>Kecamatan</td>
                  <td colspan="28">:  Sumalata</td>
                </tr>
                <tr>
                  <td>Desa</td>
                  <td colspan="28">:  Bulontio Timur</td>
                </tr>
                <!--TOTAL-->
                <tr>
                  <td colspan="3" class="text-center">TOTAL V</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">370</td>
                  <td class="akhir desa">902</td>
                  <td class="akhir desa">902</td>
                  <td class="akhir desa">158</td>
                  <td class="akhir desa">744</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">219</td>
                  <td class="akhir desa">219</td>
                  <td class="akhir desa">525</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">525</td>
                  <td>-</td>
                  <td class="akhir desa">450</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">75</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">140</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">79</td>
                  <td class="akhir desa">1</td>
                  <td></td>
                  <td></td>
                </tr>
                <!--TOTAL I - IV-->
                <tr>
                  <td colspan="3" class="text-center">TOTAL I - IV</td>
                  <td></td>
                  <td></td>
                  <td class="akhir desa">3,471</td>
                  <td class="akhir desa">9,819</td>
                  <td class="akhir desa">9,819</td>
                  <td class="akhir desa">5,249</td>
                  <td class="akhir desa">4,448</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">612</td>
                  <td class="akhir desa">612</td>
                  <td class="akhir desa">5,286</td>
                  <td class="akhir desa">-</td>
                  <td class="akhir desa">5,286</td>
                  <td>-</td>
                  <td class="akhir desa">750</td>
                  <td class="akhir desa">3</td>
                  <td class="akhir desa">96</td>
                  <td class="akhir desa">2</td>
                  <td class="akhir desa">275</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">419</td>
                  <td class="akhir desa">3</td>
                  <td class="akhir desa">140</td>
                  <td class="akhir desa">1</td>
                  <td class="akhir desa">2,768</td>
                  <td class="akhir desa">14</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
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

