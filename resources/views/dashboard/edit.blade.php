@extends('dashboard.home')

@section('content')

<br><br>
      <h2 id="h2edit" style="text-align:center; color:#023047;">Edit Record</h2><br><br>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
    </div>
      @endif
<div class="container-fluid">
    <form method="post" action="{{action('ProductController@update', $posts->id)}}">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$posts->id}}">

        <div class="row">
          <div class="col">
            <div class="form-group edit-label">
                <!-- <label for="title"><b>Title:</b></label> -->
                <textarea type="text" class="ckeditor form-control" name="title" value="">{{$posts->title}}</textarea>
            </div>
          </div>

          <div class="col">
            <div class="form-group edit-label">
              <!-- <label for="description"><b>Description:</b></label> -->
              <textarea type="text" class="ckeditor form-control" name="description" >{{$posts->description}}</textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group edit-label">
              <!-- <label for="description2"><b>Description II:</b></label> -->
              <textarea type="text" class="ckeditor form-control" name="description2" value="">{{$posts->description2}}</textarea>
            </div>
          </div>

          <div class="col">
            <div class="form-group edit-label">
              <!-- <label  for="description3"><b>Description III:</b></label> -->
              <textarea type="text" class="ckeditor form-control" name="description3" value="">{{$posts->description3}}</textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-5"></div>
          <div class="form-group col-md-6">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Record</button>
          </div>
        </div>
    </form>
</div>

@endsection()
