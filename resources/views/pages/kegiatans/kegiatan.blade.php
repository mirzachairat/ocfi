@extends('layout.main')
@section('content')
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-bottom: 30px">
                    <h3 style="text-align:center; font-weight:bold">INFORMASI <span style="color:orange">KEGIATAN</span><hr></h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                      @foreach ($datakegiatan as $item)
                      <div class="col">
                        <div class="card h-100">
                          <img src="data:image/jpeg;base64,{{$item->data_source}}" width="100%" height="auto" style="display: block" alt="">
                          <div class="card-body">
                            <h5 class="card-title">
                              <a href="{{route('detailkegiatan', ['id' => $item->id])}}">{{$item->img_title}}</a>
                            </h5>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated : {{customDateFormat($item->created_at)}}</small>
                          </div>
                        </div>
                      </div>
                      @endforeach   
                    </div>

                </div>
            </div>
        </section><!-- End Services Section -->
@endsection