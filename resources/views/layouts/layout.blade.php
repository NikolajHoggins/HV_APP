<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/cyborg/bootstrap.min.css" rel="stylesheet" integrity="sha384-mtS696VnV9qeIoC8w/PrPoRzJ5gwydRVn0oQ9b+RJOPxE1Z1jXuuJcyeNxvNZhdx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css')}}">
</head>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm fixed-top">
  <div class="container">
  	  <img src="{{ URL::to('/') }}/imgs/logo.png" alt="" height="50px">
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

<div class="container"></div>
<div class="container text-center">
	<button type="button" class="btn btn-primary" style="border-radius: 5px 0 0 5px">Søger</button><button type="button" class="btn btn-secondary" style="border-radius: 0 5px 5px 0">Sælger</button>

</div>

@yield('content')
