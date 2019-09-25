@extends('layouts.head')
{{-------------------------Menú de navegación---------------------------}}
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<nav class="navbar navbar-expand-lg	navbar-light bg-light">
	<img src="images/LogoIravi.png" width="30" height="30"	class="d-inline-block align-top" alt="">
	<a	class="navbar-brand" href="#">Artesanias Iravi</a>
	<button	class="navbar-toggler"	type="button"	data-toggle="collapse"data-target="#navbarSupportedContent"	aria-controls="navbarSupportedContent" aria-expanded="false"	aria-label="Toggle	navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul	class="navbar-nav ml-auto">
			<a href="{{ url('/')}}">
			<img src="images/iconoHome.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">
			<img src="images/iconoLogin.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
			<li	class="nav-item">
				<a	class="nav-link">Bienvenido</a>
			</li>
			<a href="#">
			<img src="images/iconoCarrito.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#">
            <img src="images/iconoSalir.png" width="30" height="30"	class="d-inline-block align-top">
            </a>
		</ul>
	</div>
</nav>
</div>
</div>
</div>
{{-----------------------FinMenú de navegación---------------------------}}

{{-------------------------Login---------------------------}}
<div class="container">
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4"> 
<div class="card" style="width: 25em; height: 25em">
  <article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Inicio de sesión</h4>
	<hr>
	<form>
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		</div>
		<input name="" class="form-control" placeholder="Correo electronico" type="email">
	</div> 
	</div> 
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		 </div>
	    <input class="form-control" placeholder="******" type="password">
	</div>
	</div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
	</div>
	<p class="text-center"><a href="#" class="btn">¿Olvidaste la Contraseña?</a></p>
	</form>
</article>
</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="background: white">
<hr>	
</div>	
</div>	
</div>
{{-------------------------Fin de login---------------------------}}
@extends('layouts.footer')
