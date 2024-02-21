<header id="header" class="header d-flex align-items-center">

  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
    <a href="/" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{asset('img/logo_ocfi.png')}}" alt="logo_ocfi" width: 50px; height:50px">
    </a>
    <nav id="navbar" class="navbar">
      <ul>
          <li><a href="/">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="/profile">Profile</a></li>
                <li class="dropdown"><a href="#">Konsorsium</a>
                  <ul>
                    <li><a href="/konsorsium_ibc">IBC</a></li>
                    <li><a href="/medialink">Media Link</a></li>
                    <li><a href="">IGI</a></li>
                  </ul> 
                </li>
                <li><a href="#">Anggota Konsorsium</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Berita</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="/kegiatan">Kegiatan Program</a></li>
                <li><a href="#">Indonesia</a></li>
                <li><a href="#">International</a></li>
              </ul>
          </li>
          <li><a href="#contact">Publikasi</a></li>
          <li><a href="#contact">Topik</a></li>
      </ul>
    </nav><!-- .navbar -->

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

  </div>
</header><!-- End Header -->