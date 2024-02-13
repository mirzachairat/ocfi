@extends('layout.main')
@section('content')
<main id="main">
    <section>
          {{-- ============== Tentang Kami ================ --}}
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>INDONESIA BUDGET CENTER (IBC)</h2>
                    <h3>Profile <span>IBC</span></h3>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                         <img src="{{asset('img/ibc/logo_ibc.png')}}" class="img-thumbnail" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <h3>Indonesia Budget Center ( IBC )</h3>
                            <p  class="indent" style="text-align:justify; margin-right:5%; text-indent: 2em">
                                Indonesia Budget Center (IBC) adalah NGO nasional yang bekerja untuk terwujudnya penganggaran negara yang terbuka dan adil dengan mendorong akuntabilitas pemerintah termasuk peningkatan kemampuan masyarakat sipil untuk mengawasi anggaran negara.
                            </p>    
                            <p  class="indent" style="text-align:justify; margin-right:5%; text-indent: 2em"> 
                                Didirikan di Jakarta pada tahun 2009, lembaga ini memiliki kemampuan dalam melakukan. IBC juga memiliki pengetahuan yang memadai untuk memobilisir masyarakat sipil untuk mendorong perencanaan dan penganggaran negara dan daerah yang terbuka dan akuntabel guna terciptanya layanan publik yang baik disektor di Indonesia. Selama didirikan IBC telah berhasil menjadi lembaga advokasi yang diperhitungkan, terlihat dari
                            </p>    
                    </div>
                </div>
                </div>
            </section>        
    </section>    
</main> 
@endsection