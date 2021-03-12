@extends('dashboard.home')

@section('content')

<script>
      $(document).ready(function(){
    $('.alert-success').fadeIn().delay(1000).fadeOut();
      });
  </script>
<!--
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif -->
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <br><br>
            <h2  style="text-align:center; color:#023047;">Create</h2>
<br>
    <div class="container-fluid">
        <form method="POST" action="{{action('ProductController@store')}}">
            @csrf
         <div class="row">
            <div class="col">
                <div class="form-group">
                    <!-- <label for="title">Title</label> -->
                    <textarea type="text" class="ckeditor form-control" name="title" id="title" ></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <!-- <label for="description">Description</label> -->
                    <textarea type="text"  class="ckeditor form-control" name="description"  id="description"></textarea>
                </div>
            </div>
         </div>


         <div class="row">
            <div class="col">
                <div class="form-group">
                    <!-- <label for="description2">Description II</label> -->
                    <textarea type="text"  class="ckeditor form-control" name="description2"  id="description2"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <!-- <label for="description3">Description III</label> -->
                    <textarea type="text"  class="ckeditor form-control" name="description3"  id="description3"></textarea>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-5"></div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success" id="submit">Submit</button>
                </div>

         </div>
        </form>
    </div>


<br><br>
@endsection()

