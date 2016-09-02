<!DOCTYPE html>
<html>
<head>
	<title>template</title>
	<!--<link href="{{ asset('/css/app.css') }}" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
	<link rel="stylesheet"  href="{{ asset('/css/produtoStyle.css') }}">
	<script type="text/javascript" src="{{ asset('/js/jquery-1.11.3.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.min.js')}}"></script>

</head>
<body>
<section id="menu" class="navbar-fixed-top">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Laravel</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li class="dropdown">
					          <a href=" " class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
					          <ul class="dropdown-menu" role="menu">
					            <li><a href="#">Cadeiras</a></li>
					            <li><a href="#">Mesas</a></li>
					            <li><a href="#">Esculturas</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Outros</a></li>
					          </ul>
					</li>
					 
					<li class="dropdown" role="menu">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Adicionar
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/produto">Produtos</a></li>
							<li><a href="">Categorias</a></li>

					 </ul>	
					
					</li>
					        
					        <li><a href="#">Galeria</a></li>
					        <li><a href="#">Acerca</a></li>
					 
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			
			</div>
		</div>
	</nav>
	</section>

	
@yield('content')
<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>


</body>
</html>