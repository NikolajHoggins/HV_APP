@extends('layouts.app')

@section('content')
@php
$array = ['meme', 'din mor'];
@endphp
@php

function getcard($id, $posttype){

    $data = array(
        'id' => $id,
        'posttype' => $posttype,
    );

    $payload = json_encode($data);

    // Prepare new cURL resource
    $ch = curl_init("/posttype");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    // Set HTTP Header for POST request
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($payload))
    );

    // Submit the POST request
    $result = curl_exec($ch);

    // Close cURL session handle
    curl_close($ch);
    return $result;

}
@endphp

@foreach($array as $title)

<body>
	<div class="container text-center">
		<div class="card-deck mb-3 text-center mt-3" style="width: 88%; margin: 0 6%">
            @php
            echo getcard(1, 'everything');
            @endphp
		</div>
	</div>
</body>
@endforeach
@endsection

