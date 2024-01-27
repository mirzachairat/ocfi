@extends('layout.main')
@section('content')
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="info">
                        <h1>{{$datakegiatan->article_name}}</h1>
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
    
                                <div class="swiper-slide">
                                    <img src="data:image/jpeg;base64,{{$datakegiatan->data_source}}" width="100%" height="auto" style="display: block" alt="">
                                </div>
                            </div>
                            <br>
                            <div>
                                {!! $datakegiatan->content !!}
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                <div class="portfolio-info">
                    <img  style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 50%;" src="../assets/img/logo_ocfi.png" alt="logo">
                </div>
                <div class="portfolio-description">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Lates POST</h5>
                          </div>
                         
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-body-secondary">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-body-secondary">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-body-secondary">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                          </div>
                          <p class="mb-1">Some placeholder content in a paragraph.</p>
                          <small class="text-body-secondary">And some muted small print.</small>
                        </a>
                        
                      </div>
                </div>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Details Section -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Informasi <span>Kegiatan</span></h3>
            </div>
           
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                            <img src="data:image/jpeg;base64,{{$datakegiatan->data_source}}" width="100%" height="auto" style="display: block" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            </div>
                            <div class="member-info">
                            <h4>{{$datakegiatan->img_title}}</h4>
                            <span>{!! $datakegiatan->content !!}</span>
                            </div>
                        </div>
                        </div>         
                    </div>
                </div>
            </section><!-- End Team Section -->       

            </div>
        </section><!-- End Services Section -->
@endsection