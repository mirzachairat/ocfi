<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html"><span>.</span></a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo"><img style="max-width: 50%;
        max-height: 50%" src="{{asset('assets/img/logo_ocfi.png')}}" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Beranda</a></li>
          <li class="dropdown scrollto active"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/profile">Profile</a></li>
              <li class="dropdown"><a href="#"><span>Konsorsium</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">IBC</a></li>
                  <li><a href="https://medialintaskomunitas.org">Media Link</a></li>
                  <li><a href="#">IGI</a></li>
                </ul>
              </li>
              <li><a href="#">Anggota Konsorsium</a>
                <ul>
                  <li><a href="#">Tim</a></li>
                </ul>  
              </li>
              <li><a href="#">Contact</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Kegiatan Program</a></li>
              <li><a href="#">Indonesia</a></li>
              <li><a href="#">International</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Buku/Modul/Artikel/Opini</a></li>
              <li><a href="#">Infografis</a></li>
              <li><a href="#">Bahan</a></li>
              <li><a href="#">Video/photo</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Topik</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Energi</a></li>
              <li><a href="#">Kehutanan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#team">All Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->