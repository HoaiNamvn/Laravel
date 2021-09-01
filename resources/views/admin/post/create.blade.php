<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>thêm bài viết </h1>
    {!! Form::open(['url' => 'post/store','method' =>'GET']) !!}
       <div class="form-group">
           {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
           {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'tiêu đề']) !!}
       </div>
       <div class="form-group">
            {{-- <textarea class="form-control" name="content" placeholder="Nội dung" id="" cols="30" rows="10" rows="10"></textarea> --}}
            {!! Form::textarea('content', '', ['class'=>'form-control']) !!}
       </div>
      <div class="form-group">
           {{-- <input type="submit" name="sm-add" value="thêm"> --}}
           {!! Form::submit('Thêm mới', ['name'=>'sm-add','class'=>'btn btn-dark']) !!}
      </div>


    {!! Form::close() !!}
</div>
</body>

</html>
