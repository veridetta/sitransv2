<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="d-flex">
    <div class="col-4 p-3">
      <h5>Alamat:</h5>
      <p>{{$profile->address}}</p>
    </div>
    <div class="col-4 p-3">
      <h5>Kontak:</h5>
      <ul class="list-unstyled mb-4 mt-3">
        <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span class="fw-medium mx-2 text-heading">Telp:</span> <span>{{$profile->phone}}</span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-twitter"></i><span class="fw-medium mx-2 text-heading">Twitter:</span> <span>{{$profile->twitter}}</span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span class="fw-medium mx-2 text-heading">Email:</span> <span>{{$profile->email}}</span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-facebook"></i><span class="fw-medium mx-2 text-heading">Facebook:</span> <span>{{$profile->facebook}}</span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-youtube"></i><span class="fw-medium mx-2 text-heading">Youtube:</span> <span>{{$profile->youtube}}</span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-instagram"></i><span class="fw-medium mx-2 text-heading">Instagram:</span> <span>{{$profile->instagram}}</span></li>
      </ul>
    </div>
    <div class="col-4 p-3">
      <div class="embed-responsive embed-responsive-4by3">
        <iframe class="embed-responsive-item" src="{{$profile->gmaps}}"></iframe>
      </div>
    </div>
  </div>
  <p class="text-center">&copy; {{ date('Y') }} {{$profile->name}}. Hak Cipta Dilindungi Undang-Undang.</p>
</footer>
<!--/ Footer-->
