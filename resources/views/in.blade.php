@extends('home')

@section('content')

    <div class="container">
    <h2 style="text-align:center">Edit A Record</h2><br  />

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
    </div>
      @endif



      <form method="post" action="">
      @csrf

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <textarea type="text" id="title" class="ckeditor form-control" name="title" value="{{$posts->title}}"></textarea>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description:</label>
              <input type="text" class="ckeditor form-control" name="description" value="{{$posts->description}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description2">Description2:</label>
              <input type="text" class="ckeditor form-control" name="description2" value="{{$posts->description2}}">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Record</button>
          </div>
        </div>
      </form>



  </div>

@endsection()
