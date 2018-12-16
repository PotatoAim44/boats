<!doctype html>
<html lang ="fr">
	<head>
		<meta charset ="UTF -8">
		<title> @yield('titre') </title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- pour bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		@yield('css', '')
		<!-- le style qui suit est pour aligner les bouton #right-side-button a droite -->
		<style>
			.navbar-header{
			  width:100%;
			}
			#right-side-button{
			  float:right;
			}
		</style>
	</head>
	
	<body>
		<div class="titre-site">
			<h1>Nom du port</h1>
		</div>
		<div name="menu-site">
			<!-- ici il faut voir si on est connectés ou pas pour choisir le bon header -->
			@include('includes.header2')
		</div>
		
		<div class="container-fluid">
			<div class="contenu-page">
				@yield('contenu')
			</div>
		</div>
		<!-- bizarre <div class="footer">
			@include('includes.footer')
		</div> -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>