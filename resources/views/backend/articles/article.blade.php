@extends('layout.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Tabel Article</h3>
        
        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <div class="input-group-append">
              <a href="{{route('formarticle')}}" class="btn btn-primary">Tambah Artikel</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-head-fixed text-nowrap">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th>ID Kategori</th>
              <th>Nama Artikel</th>
              <th>Title Gambar</th>
              <th>Gambar Kontent</th>
              <th>Kontent</th>
              <th>Dibuat Oleh</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td></td>
              <td>{{$item->catergory_id}}</td>
              <td>{{$item->article_name}}</td>
              <td>{{$item->img_title}}</td>
              <td><img src="data:image/jpeg;base64,{{$item->data_source}}" width="100" height="80" alt="Image"></td>
              <td>{{$item->content}}</td>
              <td>{{$item->created_by}}</td>
              <td>
                <button class="btn btn-sm btn-primary">edit</button>
                <a href="{{route('deletearticle',['id'=>$item->id])}}"class="btn btn-sm btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>

@endsection