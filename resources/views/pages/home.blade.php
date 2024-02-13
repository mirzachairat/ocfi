@extends('layout.main')
@section('content')
    <!-- ======= Top Bar ======= -->

    <section id="hero" class="hero">
      <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
            <h2>Selamat Datang di <br> <span>Open Climate Change in Indonesia</span></h2>
            <p></p>
            <div class="d-flex justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{asset('img/laptop1.png')}}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
          </div>
        </div>
      </div>
  
      </div>
    </section>
    <!-- End Hero Section -->
  
    <main id="main">
      <!-- ======= Berita Terbaru ======= -->
      
      <section>
        <div class="container">
          <div class="section-header">
            <h2>Berita Terbaru</h2>
            <p>Informasi Terkini yang terkait pada Organisasi</p>
          </div>
          <div class="card1" style="
              position: absolute;
              margin-left:17rem;
              ">
                  <div class="slide-container swiper">
                      <div class="slide-content">

                          <div class="card-wrapper swiper-wrapper">
                            @foreach ($datakegiatan as $item)
                              <div class="card swiper-slide" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                  <img src="data:image/jpeg;base64,{{$item->data_source}}" class="img-fluid" alt="img" style="object-fit: cover; height: 12vw">
                                  <div class="card-content" style="padding:10%">
                                      <h2 class="name">{{$item->article_name}}</h2>
          
                                      <a href="" class="button">Lihat Detail</a>
                                  </div>
                              </div>
                            @endforeach  
                          </div>
                      </div>
          
                      <div class="swiper-button-next swiper-navBtn"></div>
                      <div class="swiper-button-prev swiper-navBtn"></div>
                      <div class="swiper-pagination"></div>
                  </div>
            </div>
            <div class="card" style="
            background-color:#4070f4;
            width: 25rem;
            height:30rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            position: static;">
              <div class="card-body" 
              style="
              padding: 20px;
              text-align: center;
              margin-top: 120px;
              ">
              <i class="bi bi-layout-text-window-reverse"></i>
                <h5 class="card-title">Berita Terkini</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-warning">Rician Berita</a>
              </div>
          </div>
        </div>
      </section>
  
      <!-- ======= Call To Action Section ======= -->
      <section id="call-to-action" class="call-to-action" style="background-color: #f5f5f5">
        <div class="container text-center" data-aos="zoom-out" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          <h3>JUDUL VIDEO</h3>
          <p> Keterangan terkait video yang di upload</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>
      </section><!-- End Call To Action Section -->
    
      <section id="clients" class="clients">
        <div class="container aos-init aos-animate" data-aos="zoom-out">
  
          <div class="clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper align-items-center" id="swiper-wrapper-cefb88109fef151055" aria-live="off" style="transform: translate3d(-2884px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6" role="group" aria-label="7 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="7" role="group" aria-label="8 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;"><img src="{{asset('img/logo_ocfi.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;"><img src="{{asset('img/logo-media.png')}}" class="img-fluid" alt=""></div>
              <div class="swiper-slide" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;"><img src="{{asset('img/ibc/logo_ibc.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" role="group" aria-label="1 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1" role="group" aria-label="2 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" role="group" aria-label="3 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" role="group" aria-label="4 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" role="group" aria-label="5 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" role="group" aria-label="6 / 8" style="width: 86px; margin-right: 120px;"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
  
        </div>
      </section>


      {{-- ALL TEAM --}}
      <section id="swiper" class="swiper">
        <div class="section-header" style="margin-top: 3%">
          <h2>SEMUA ANGGOTA</h2>
          <p>Informasi seluruh keanggotaan OCFI</p>
        </div>
        <div class="slide-container swiper">
          <div class="slide-content">
              <div class="card-wrapper swiper-wrapper">
                @foreach ($datakegiatan as $item)
                <div class="card swiper-slide">
                    <div class="image-content" style="max-width:50%;height: auto; margin: 0 auto; display:block; ">
                      <img src="{{asset('img/user_vector.png')}}" alt="img" class="card-img">
                    </div>

                    <div class="card-content">
                        <h2 class="name">User Name</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">View More</button>
                    </div>
                </div>
                @endforeach
              </div>
          </div>

          <div class="swiper-button-next swiper-navBtn"></div>
          <div class="swiper-button-prev swiper-navBtn"></div>
          <div class="swiper-pagination"></div>
      </div>
      </section>
  
      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Semua Berita</h2>
            <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
          </div>
  
          <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
  
            <div class="row gy-4 portfolio-container">

              @foreach ($datakegiatan as $item)
                <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                  <div class="portfolio-wrap">
                    <a href="" data-gallery="portfolio-gallery-app" class="glightbox"><img src="data:image/jpeg;base64,{{$item->data_source}}" class="img-fluid" alt="img" style="object-fit: cover;width:100%; height: 13vw"></a>
                    <div class="portfolio-info">
                      <h4><a href="portfolio-details.html" title="More Details">{{$item->article_name}}</a></h4>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->
              @endforeach
  
            </div><!-- End Portfolio Container -->
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
    </main><!-- End #main -->
@endsection
