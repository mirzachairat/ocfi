@extends('layout.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Category Page</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Kategori
              </button>             
            </div>
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10%">ID</th>
                  <th style="width: 50%">Nama Kategori</th>
                  <th style="width: 20%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $index=>$item)
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->category}}</td>
                  <td>
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- card-body -->
          <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="tagform" id="postdata" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="category">Nama Kategori</label>
                    <input type="text" class="input-group" name="category" id="category">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->  
@endsection

@section('javascript')
<script>
  $(document).ready(function () {
    // Attach a submit handler to the form
    $('#postdata').submit(function (event) {
        // Make an AJAX request to submit the form data
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: "{{route('tambahkategori')}}", // Replace with your actual route
            data : $('.tagform').serialize(),
            success: function (response) {
                // Log the success message (you can handle it as needed)
                console.log(response.message);
  
                // Close the modal (replace 'myModal' with the actual ID of your modal)
                $('#exampleModal').modal('hide');
                location.reload();
            },
            error: function (error) {
                // Handle errors if needed
                console.error('Error:', error);
            }
        });
    });
  });
</script>
@endsection