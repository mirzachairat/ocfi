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
                    width: 50%;" src="{{asset('img/logo_ocfi.png')}}" alt="logo">
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
     
@endsection