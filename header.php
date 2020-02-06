
	<title>Vegetarian Zadrig</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/css.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
	<script type="text/javascript" src="./js/angular-local-storage-min.js"></script>
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/bootstrap.js"></script>
	<script type="text/javascript" src="./js/funciones.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Roboto|Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body ng-controller="formcontroller">

	<div id="details-fondo" onclick="detailsExit();">
			
		<div>
			<h4 class="text-center" style="color: red;">Clic en cualquier parte para cerrar la ventana emergente</h4>
			<h5>Este producto contiene: <span id="detailsContent" style="font-style: italic;"></span></h5>
		</div>

	</div>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){
		if(f.fbq) return;
		n=f.fbq=function(){
			n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)
		};
		if(!f._fbq) f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
 	fbq('init', '514773295900299'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
 		<img height="1" width="1" 
		src="https://www.facebook.com/tr?id=514773295900299&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

	<header>

		<nav class="navbar navbar-inverse menu">
					<div class="container">

						<div class="navbar-header">
								<img src="./imagenes/logo3.png" class="img-logo navbar-brand" />

							<div class="centrar-column-2">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-colapsar">
								<span class="sr-only">Navegacion</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						</div>

						<div class="collapse navbar-collapse navbar-right" id="btn-colapsar">
							<div class="centrar-column">
								<ul class="nav navbar-nav">
									<li id="menu-inicio"><a href="#" onclick="mostrarMenu('menu-inicio-1');">
										<img src="./imagenes/inicio3.png" class="img-menu">
										<p id="menu-inicio-1" class="menu-text">Inicio</p>
									</a></li>
									<li id="menu-promociones"><a href="#" onclick="mostrarMenu('menu-promociones-1');">
										<img src="./imagenes/promociones3.png" class="img-menu" />
										<p id="menu-promociones-1" class="menu-text">Promociones</p>
									</a></li>
									<li id="menu-adicionales"><a href="#" onclick="mostrarMenu('menu-adicionales-1');">
										<img src="./imagenes/adicionales3.png" class="img-menu" />
										<p id="menu-adicionales-1" class="menu-text">Adicionales</p>
									</a></li>
									<li id="menu-especialidades"><a href="#" onclick="mostrarMenu('menu-especialidades-1');">
										<img src="./imagenes/especialidades3.png" class="img-menu" />
										<p id="menu-especialidades-1" class="menu-text">Especialidades</p>
									</a></li>
									<li id="menu-arma"><a href="#" onclick="mostrarMenu('menu-arma-1');">
										<img src="./imagenes/arma3.png" class="img-menu" />
										<p id="menu-arma-1" class="menu-text">Arma tu Burger</p>
									</a></li>
									<li id="menu-carrito"><a href="#" onclick="mostrarMenu('menu-carrito-1');">
										<img src="./imagenes/carrito3.png" class="img-menu" />
										<p id="menu-carrito-1" class="menu-text">Carrito</p>
									</a></li>

								</ul>
							</div>
						</div>

					</div>
				</nav>
		
	</header>

	<div class="container">

		<div id="formdatos-data-2" class="row text-family-sans" hidden>

			<div class="row formdata">
				<div class="col-sm-12">
					<span>Nombre: <span>{{user.nombre}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Apellido: <span>{{user.apellido}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Numero Telefonico: <span>{{user.telefono}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Email: <span>{{user.correo}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Colonia: <span>{{user.colonia}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Dirección: <span>{{user.direccion}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Referencias: <span>{{user.referencias}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Latitud (automatico): <span>{{user.latitud}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Longitud (automatico): <span>{{user.longitud}}</span></span>
				</div>

				<button class="cleardata" ng-click="clearformdata();">Vaciar Cache</button>

			</div>

		</div>

		<div id="formdatos-data-1" class="row text-family-sans" hidden>

			<div class="row formdata">
				<div class="col-sm-12">
					<span>Nombre: <span>{{user.nombre}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Apellido: <span>{{user.apellido}}</span></span>
				</div>

				<div class="col-sm-12">
					<span>Numero Telefonico: <span>{{user.telefono}}</span></span>
				</div>

				<button class="cleardata" ng-click="clearformdata();">Vaciar Caché</button>
			</div>

		</div>

	</div>