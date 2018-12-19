<?php
use Auth;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<style>
		/*pour le bouton toggle*/
		.navbar-header{
		  width:100%;
		}
		#right-side-button{
		  float:right;
		}
	</style>
</head>
<body>
	<?php
	function current_page($uri = "/") {
		return strstr(request()->path(), $uri);
	}
	?>
    <div class="container-fluid" id="app">
        <div class="titre-site">
			<h1>Nom du port</h1>
		</div>
		
		<div name="menu-site">
		@include('includes.header1')
		<!--@if(Auth::check())
			@include('includes.header2')
		@else
			@include('includes.header1')
		</div>-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
