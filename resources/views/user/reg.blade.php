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
    <h1>Đăng kí  </h1>
    {!! Form::open(['url' => 'user/store','method' =>'POST']) !!}
{{-- tên đăng nhập  --}}
       <div class="form-group">
           {!! Form::label('username','Tên đăng nhập ') !!}
           {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
           {!! Form::text('username', '', ['class'=>'form-control','placeholder'=>'tiêu đề']) !!}
       </div>
{{-- パスワード --}}
       <div class="form-group">
           {!! Form::label('password','mật khẩu ') !!}
           {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
           {!! Form::password('password', ['class'=>'form-control']) !!}
       </div>
{{-- メール --}}
       <div class="form-group">
           {!! Form::label('email','Email') !!}
           {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
          {!! Form::email('email','', ['class'=>'form-control']) !!}
       </div>

      <div class="form-group">
           {{-- <input type="submit" name="sm-add" value="thêm"> --}}
           {!! Form::submit('Đăng kí ', ['name'=>'sm-add','class'=>'btn btn-dark']) !!}
      </div>


    {!! Form::close() !!}
</div>
</body>

</html>
