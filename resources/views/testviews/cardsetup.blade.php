<?php
    $array = ['post 1','post 2', 'post 3'];
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
  <div class="container">
  	  <img src="{{ URL::to('/') }}/imgs/logo.png" alt="" class="w-25">
  </div>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
<div class="container"></div>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <div class="container">
  	  <img src="{{ URL::to('/') }}/imgs/logo.png" alt="" class="w-25">
  </div>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
<div class="container"></div>
<div class="container text-center">
	<button type="button" class="btn btn-primary" style="border-radius: 5px 0 0 5px">Søger</button><button type="button" class="btn btn-secondary" style="border-radius: 0 5px 5px 0">Sælger</button>

</div>
@foreach($array as $title)


<body>
	<div class="container text-center">
		<div class="card-deck mb-3 text-center mt-3" style="width: 88%; margin: 0 6%">
			<div class="card mb-4 shadow-sm">
			    <div class="card-header">
			      <h4 class="my-0 font-weight-bold text-left">{{$title}}</h4>
			    </div>
			    <div class="card-body">
			    	<div class="container">
			    		<div class="row">
			    			<div class="col col-lg-6">
			    				<h1 class="card-title pricing-card-title">Information om ansat</h1>
			    			</div>
			    			<div class="col col-lg-6">
			    				<h1 class="card-title pricing-card-title">Yderligere information</h1>

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
								<p class="text-left">Jacobsen VVS</p>
								<p class="text-left">Kloakmester</p>
								<p class="text-left">Jonas Larsen</p>
								<p class="text-left">34 år</p>
								<p class="text-left">14 år</p>
								<p class="text-left">+45 88 88 88 88</p>
							</div>
			    			<div class="col col-lg-6">
			    				<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			    				
			    			</div>
			    		</div>
			    	</div>
			      	<button type="button" class="btn btn-lg btn-block btn-outline-primary mt-4">Læs mere</button>
			    </div>
			</div>
		</div>
	</div>
</body>
@endforeach