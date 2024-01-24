@extends('layout.main')
@section('content')
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/ocfi1.png" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="assets/img/ocfi2.png" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                    <li><strong>Category</strong>: Web design</li>
                    <li><strong>Client</strong>: ASU Company</li>
                    <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>This is an example of portfolio detail</h2>
                    <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
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
                        @foreach ($datakegiatan as $item)
                        <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                            <img src="data:image/jpeg;base64,{{$item->data_source}}" width="100%" height="auto" style="display: block" alt="">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            </div>
                            <div class="member-info">
                            <h4>{{$item->img_title}}</h4>
                            <span>{!! $item->content !!}</span>
                            </div>
                        </div>
                        </div>      
                        @endforeach   
                    </div>
                </div>
            </section><!-- End Team Section -->       

            </div>
        </section><!-- End Services Section -->
@endsection