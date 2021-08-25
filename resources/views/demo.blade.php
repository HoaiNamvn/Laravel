{{-- @for($i =2;$i <=$n;$i++) 
<p> Gía trị hiện tại là :{{ $i }} </p>
@endfor --}}

{{-- @foreach($users as $user)
<p>{{ $user['name'] }}</p>
@endforeach --}}

@php
    
    foreach($users as $user){
        echo $user['name'].'<br>';
    }
@endphp
@include('include.comment',['title' => 'title bai viet'])
