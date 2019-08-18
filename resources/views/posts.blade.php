@extends('layouts.app')

@section('content')
@php

function getcard($post, $posttype){
    if($posttype == 'everything'){
        return view('posttypes.everything')->with('postdata', $post);
    }else{
        return 'meme';
    }

}
@endphp
<body>
@foreach($posts as $post)
	<div class="container text-center">
		<div class="card-deck mb-3 text-center mt-3" style="width: 88%; margin: 0 6%">
            @php
            echo getcard($post, 'everything');
            @endphp
		</div>
    </div>
@endforeach
</body>

{{-- PAGE NAVIGATION FIXES MED JQUERY (HVIS DEN SER ET "-" HIDER VI BARE FELTET LUL)--}}
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if($pagenr>2 && $pagenr<$pagecount-2)
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr-1}}">Previous</a></li>
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr-2}}">{{$pagenr-2}}</a></li>
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr-1}}">{{$pagenr-1}}</a></li>
        <li class="page-item active"><a class="page-link" href="">{{$pagenr}}</a></li> {{-- DEN SIDE VI ER PÅ--}}
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr+1}}">{{$pagenr+1}}</a></li>
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr+2}}">{{$pagenr+2}}</a></li>
        <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr+1}}">Next</a></li>
        @endif
    </ul>
</nav>





@endsection

