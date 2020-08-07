<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      @yield('title','Prueba') | {{ config('app.name', 'Laravel') }}
    </title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('tail-select/css/bt4/tail.select-default.css')}}">
    <style>
    	html, body {
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            }
        .btn-pink{
        	background: #e23c64;
        	color: white;
        	font-size: 14px;
          padding-right: 34px;
          padding-left: 34px;
          padding-top: 12px;
          padding-bottom: 12px;
        }
        .rounded-1{
        	border-radius: 32px;
        }
        
    </style>
  </head>
  <body class="container">
  	<div class="text-center">
  		<img class="mt-5 mb-5" src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png">
  		<h2 class="mb-5">Prueba de desarrollo Sigma</h2>
  		<p class="m-5 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  	</div>
    <div class="row ml-md-5 mr-md-5">
      <div class="col-ms-12 col-md-6">
      	<figure class="figure">
			<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" class="figure-img img-fluid rounded" alt="...">
		</figure>
      </div >
      <div class="col-ms-12 col-md-6">
      	@yield('formulario')
      </div>
    </div>

<!-- Scripts -->
<script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
<script src="{{asset('sweetalert/sweetalert.min.js')}}"></script>
<section>
    @include('sweet::alert')
    @include('sigma.error')
</section>
<script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
@yield('script')
</body>
</html>
