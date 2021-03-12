@extends('home')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
            <h2  style="text-align:center">Create</h2>
    <div class="col-lg-9">
        <form method="POST" action="{{url('product')}}">
            @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <textarea type="text" class="ckeditor form-control" name="title" id="title" ></textarea>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text"  class="ckeditor form-control" name="description"  id="description"></textarea>

        </div>

        <div class="form-group">
            <label for="description2">Description2</label>
            <textarea type="text"  class="ckeditor form-control" name="description2"  id="description2"></textarea>

        </div>

        <div class="form-group">
            <label for="description3">Description3</label>
            <textarea type="text"  class="ckeditor form-control" name="description3"  id="description3"></textarea>

        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-success" id="submit">Submit</button>
        </div>
        </form>
        </div>


        <!-- <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 100,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script> -->
        <!-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            }); -->

        </script>

@endsection()

