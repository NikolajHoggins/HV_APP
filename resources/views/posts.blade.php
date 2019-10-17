@extends('layouts.app')

@section('content')
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
    $('document').ready(function() {
        $("#employeeselect").change(function() {
            console.log($('#employeeselect').val());
        });
    });
</script>

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
    @guest

    @else
    <div class="container text-center">
        <div class="card-deck mb-3 text-center mt-3" style="width: 88%; margin: 0 6%">

            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 contenteditable class="my-0 font-weight-bold text-left">Opslagstitel</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="form-group">
                                <label for="sel1">Vælg ansat:</label>
                                <select class="form-control" id="employeeselect">
                                    @foreach ($employees as $employee)
                                    <option>{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-2">
                                <p class="font-weight-bold text-left">Firma:</p>
                                <p class="font-weight-bold text-left">Position:</p>
                                <p class="font-weight-bold text-left">Navn:</p>
                                <p class="font-weight-bold text-left">Alder:</p>
                                <p class="font-weight-bold text-left">Erfaring:</p>
                                <p class="font-weight-bold text-left">Tlf:</p>
                            </div>
                            <div class="col col-lg-4">
                                <p id="firmavalue" class="text-left">Jacobsen VVS</p>
                                <p id="positionvalue" class="text-left">Kloakmester</p>
                                <p id="namevalue" class="text-left">Jonas Larsen</p>
                                <p id="agevalue" class="text-left">34 år</p>
                                <p id="experiencevalue" class="text-left">14 år</p>
                                <p id="tlfvalue" class="text-left">+45 88 88 88 88</p>
                            </div>
                            <div class="col col-lg-6">
                                <div class="row">
                                    <h1 class="card-title pricing-card-title">Yderligere information</h1>
                                </div>
                                <div class="row">
                                    <p class="text-left">description</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-lg-6">

                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary mt-4">Gennemfør opslag</button>
                </div>
            </div>
        </div>
    </div>
    @endauth
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
        @if($pagenr>2 && $pagenr<$pagecount-2) <li class="page-item"><a class="page-link" href="/posts/1/{{$pagenr-1}}">Previous</a></li>
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
