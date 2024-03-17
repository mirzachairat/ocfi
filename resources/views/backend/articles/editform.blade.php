@extends('layout.admin')
@section('content')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Edit Article</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('tambaharticle')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="catergory_id">Kategori</label>
                  <select class="form-control" name="catergory_id" id="catergory_id">
                        <option>{{$data_article->category->name}}</option>
                        @foreach ($kategori as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="subkategori_id">Sub Kategori</label>
                  <select class="form-control" name="subkategori_id" id="subkategori_id">
                    <option>==== Pilih Sub Kategori ====</option>
                    @foreach ($subkategori as $item)
                        <option value="{{$item->id}}">{{$item->namasub}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="article_name">Nama Article</label>
                  <input type="text" class="form-control" name="article_name" id="article_name" value="{{$data_article->article_name}}">
                </div>
                <div class="form-group">
                  <label for="img_title">Title Gambar</label>
                  <input type="text" class="form-control " name="img_title" id="img_title" value="{{$data_article->img_title}}" placeholder="Isi Title Gambar">
                </div>
                <div class="form-group">
                    <label for="content">Isi Content</label>
                    <textarea id="editor" name="content" value="{{$data_article->content}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Pilih Gambar</label>
                    <input type="file" class="form-control-file" name="image" id="image" accept="image/*" value="{{$data_article->data_source}}">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section> 

@endsection
