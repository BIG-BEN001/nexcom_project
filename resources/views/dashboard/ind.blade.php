@extends('dashboard.home')

@section('content')
<br><br>

    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

    <table class="table table-striped table-hover table-sm table-bordered" id="table">
    <thead class="table-active bg-primary" id="th">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Description II</th>
        <th>Description III</th>
        <th colspan="3">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{!!$post['title']!!}</td>
        <td>{!!$post['description']!!}</td>
        <td>{!!$post['description2']!!}</td>
        <td>{!!$post['description3']!!}</td>

        <!-- <td><a href="{{action('ProductController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td> -->
        <!-- <i class="far fa-edit"></i> -->
        <td><a href="{{ route('edit',$post['id']) }}" class="btn btn-warning btn-font"><b>Edit</b></a></td>
        <td>
          <form action="{{action('ProductController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-font" onclick="return myFunction();" type="submit"><b>Delete</b></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <script>
  function myFunction() {
      if(!confirm("This record will be deleted!"))
      event.preventDefault();
  }
 </script>

@endsection()
