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

{{-- select --}}
       <div class="form-group">
           {!! Form::label('city','thành phố') !!}
           {{-- <input class="form-control" type="text" name="title" placeholder="tiêu đề "> --}}
         {!! Form::select('city',[0=>'選択',1=>'Hà Nội',2=>'TP .HCM',3=>'Đà Nẵng'], 0, ['class'=>'form-control']) !!}

{{-- Radio --}}
<div class="form-group">
    {!! Form::label('gender', '性別') !!}
    <div class="form-check">
        {!! Form::radio('gender', 'male', '', ['class'=>'form-check-input','id'=>'male']) !!}
        {!! Form::label('male', '男', ['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check">
        {!! Form::radio('gender', 'female', 'checked', ['class'=>'form-check-input','id'=>'female']) !!}
        {!! Form::label('female', '女の子', ['class'=>'form-check-label']) !!}
    </div>
</div>

{{-- Checkbox --}}
<div class="form-group">
    {!! Form::label('skill', 'スキール', []) !!}
    <div class="form-check">
        {!! Form::checkbox('skill', 'html', '', ['class'=>'form-check-input','id'=>'html']) !!}
        {!! Form::label('html', 'HTML', ['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox('skill', 'css', '', ['class'=>'form-check-input','id'=>'css']) !!}
        {!! Form::label('html', 'CSS', ['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox('skill', 'php', '', ['class'=>'form-check-input','id'=>'php']) !!}
        {!! Form::label('php', 'PHP', ['class'=>'form-check-label']) !!}
    </div>
    <div class="form-check">
        {!! Form::checkbox('skill', 'javacript', '', ['class'=>'form-check-input','id'=>'javacript']) !!}
        {!! Form::label('javacript', 'JAVASCRIPT', ['class'=>'form-check-label']) !!}
    </div>
</div>

{{-- 生年月日 --}}
<div class="form-group">
    {!! Form::label('birth', '生年月日') !!}
    {!! Form::date('birth', '', ['class'=>'form-control']) !!}
</div>

{{-- TEXT AREA --}}
<div class="form-group">
    {!! Form::label('intro', '自己紹介', []) !!}
    {!! Form::textarea('intro','', ['class' => 'form-control','id'=>'intro']) !!}
</div>

{{-- submit --}}
      <div class="form-group">
           {{-- <input type="submit" name="sm-add" value="thêm"> --}}
           {!! Form::submit('Đăng kí ', ['name'=>'sm-add','class'=>'btn btn-dark']) !!}
      </div>


    {!! Form::close() !!}
</div>
</body>

</html>
