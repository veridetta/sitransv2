@php
$configData = Helper::appClasses();
@endphp
<!-- Horizontal Menu -->
<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal  menu bg-menu-theme flex-grow-0">
  <div class="{{$containerNav}} d-flex h-100">
    <ul class="menu-inner">
      <li class="menu-item">
        <a href="{{$profile->server}}" class="menu-link">
          <div>Dashboard</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-info"></i>
          <div>Tentang</div>
        </a>
        <ul class="menu-sub">
          @foreach ($about as $a)
          <li class="menu-item">
            <a href="{{ route('pages', ['slug' => $a->slug]) }}" class="menu-link">
              <div>{{$a->title}}</div>
            </a>
          </li>
          @endforeach
        </ul>
      </li>
      <li class="menu-item">
        <a href="{{route('gis')}}" class="menu-link">
          <div>Peta Transmigrasi</div>
        </a>
      </li>
      <!-- UNIT KERJA
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-briefcase"></i>
          <div>Unit Kerja</div>
        </a>
        <ul class="menu-sub">
          foreach ($unit as $u)
          <li class="menu-item">
            <a href="{ $u->url }}" class="menu-link">
              <div>{$u->unit}}</div>
            </a>
          </li>
          endforeach
        </ul>
      </li>
        UNIT KERJA -->
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-briefcase"></i>
          <div>Informasi Publik</div>
        </a>
        <ul class="menu-sub">
          @foreach ($infoPublic as $u)
          <li class="menu-item">
            <a href="{{ route('categories', ['slug' => $u->slug]) }}" class="menu-link">
              <div>{{$u->category}}</div>
            </a>
          </li>
          @endforeach
        </ul>
      </li>
      <!-- POKJA
      <li class="menu-item">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-users"></i>
          <div>POKJA</div>
        </a>
        <ul class="menu-sub">
          foreach ($pokja as $p)
          <li class="menu-item">
            <a href="{ $u->url }}" class="menu-link">
              <div>{$p->title}}</div>
            </a>
          </li>
          endforeach
        </ul>
      </li>
       / POKJA -->
    </ul>
  </div>
</aside>
<!--/ Horizontal Menu -->
