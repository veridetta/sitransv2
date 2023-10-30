<div class="col-md-3">
  <!-- PROFILE -->
  <div class="card">
    <div class="card-body">
      <div class="divider divider-primary">
        <div class="divider-text"><h5>BERITA TERPOPULER </h5></div>
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
  <!-- / PROFILE -->
  <!-- UNIT KERJA -->
  <div class="card mt-3">
    <div class="card-body">
      <div class="divider divider-primary">
        <div class="divider-text"><h5>BERITA TERKAIT</h5></div>
      </div>
      @foreach ($related as $article)
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
  <!-- / UNIT KERJA -->
</div>
