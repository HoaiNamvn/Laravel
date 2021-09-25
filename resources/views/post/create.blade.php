<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/wpco4cfq5m8m1srfz1q2ksys8z17jeeipl9dwuf0dm1vxj93/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
    path_absolute : "http://localhost/laravel/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>thêm bài viết </h1>
        {{-- @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
        @endforeach
        </ul>

    </div>
    @endif --}}
    {!! Form::open(['url' => 'post1/store','method' =>'POST','files'=>true]) !!}

    <div class="">

        <div class="form-group ">

            {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
            {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'tiêu đề']) !!}
            @error('title')
            <small class="form-text text-danger"> {{ $message }} </small>
            @enderror

        </div>
        <div class="form-group ">
            {{-- <textarea class="form-control" name="content" placeholder="Nội dung" id="" cols="30" rows="10" rows="10"></textarea> --}}
            {!! Form::textarea('content', '', ['class'=>'form-control']) !!}
            @error('content')
            <small class="form-text text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class'=>'form-control-file']) !!}
        </div>
        <div class="form-group">
            {{-- <input type="submit" name="sm-add" value="thêm"> --}}
            {!! Form::submit('Thêm mới', ['name'=>'sm-add','class'=>'btn btn-dark']) !!}
        </div>

    </div>
    {!! Form::close() !!}
    </div>
</body>

</html>
