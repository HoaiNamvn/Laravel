// kế thừa file app
@extends('layouts.app')

// định nghĩa section
@section('title','Tiêu đề trang child')
@section('content')
<p> Nội dung trang con ở đây </p>


@isset($post_title)
<p>Tiêu đề :{{ $post_title }}</p>
@endisset

@empty($users)
    <p>Không có user nào </p>
@endempty
@if ($data % 2 == 0)
<p>{{$data}} Là số chẵn</p>
@else 
<p> {{ $data }} Là số lẻ </p>
@endif
@endsection

@section('sidebar')
@parent
<p>Sidebar trang con ở đây </p>
@endsection