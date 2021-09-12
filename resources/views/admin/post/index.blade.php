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
    <h1> Trang danh sách bài viết </h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

<ul>
     @foreach ($posts as $post)
<li>
  <a href="">{{ $post->title }}</a>
  {{-- // chen anh tu function url --}}
  {{-- <img src="{{ url($post->thumbnail) }}" alt=""> --}}
 <p>{{ $post->content }}</p>
</li>
    @endforeach


</ul>
{{ $posts->appends(['sort'=>'votes'])->links() }}

</body>
</html>
