<cuerpo>
	<div class="container">

		<script type="text/javascript">
			function initMap(){
				if(navigator.geolocation){

					var map;

					var mapOpt = {
						zoom: 15, 
						mapTypeId: google.maps.MapTypeId.ROADMAP
					};

					map = new google.maps.Map(document.getElementById("formdatos-data-2-map"), mapOpt);

					navigator.geolocation.getCurrentPosition(function(position){

						var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

						var infowindow = new google.maps.InfoWindow({
							map: map,
							position: geolocate,
							content:
								'<h1>Esta es tu Geolocalizacion</h1>' + 
								'<h2>Latitud:'+ position.coords.latitude +'</h2>' + 
								'<h2>Longitud:'+ position.coords.longitude +'</h2>'
						});



						longitud = position.coords.longitude;
						latitud = position.coords.latitude

						map.setCenter(geolocate);
					});

				}else{
					alert("Error al calcular precio de envio, por favor notifiquenos de esto");
				}
			}
		</script>

		<div id="formdatos-data-2-map" class="row text-family-sans google-map" hidden></div>

		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAi_o2Q8sUSQAOo86DGPODHuC4ONF8c5x8&callback=initMap"></script>

		<div id="opt-entrega" class="row">

		<div class="row text-family-sans">
			<h2 class="text-center" style="margin-bottom: 20px;font-weight: bold;">¿EN DONDE ENTREGAREMOS EL PEDIDO?</h2>
		</div>

		<div class="row text-family-sans">
			
			<div class="col-md-6 col-sm-12 margin-top-20px">

				<div class="row enviar-pedido margin-l-r-20px sombra-medium">
					<h3 class="text-center" style="color: white;">¡Servicio a Domicilio!</h3>
					<h4 class="text-center italic" style="color: white;">Enviaremos tu pedido hasta la puerta de tu casa</h4>
					<img class="center-img img-h-100px" src="./imagenes/envio.png" />
					<button class="button-inicio-enviar center-button" ng-click="openForm(1);">Elegir Opción (Clic Aquí)</button>
				</div>

			</div>

			<div class="col-md-6 col-sm-12 margin-top-20px">

				<div class="row restaurante-pedido margin-l-r-20px sombra-medium">
					<h3 class="text-center" style="color: white;">¡Recoge tu Pedido!</h3>
					<h4 class="text-center italic" style="color: white;">Entregaremos tu pedido personalmente</h4>
					<img class="center-img img-h-100px" src="./imagenes/restaurante.png" />
					<button class="button-inicio-restaurante center-button" ng-click="openForm(0);">Elegir Opción (Clic Aquí)</button>
				</div>

			</div>

		</div>

		</div>

		<div id="formdatos-2" class="row text-family-sans" hidden>

			<form action="./">
				<div>
					<label>Nombre*</label>
					<input ng-model="user.nombre" type="text" name="nombre" required/>
				</div>

				<div>
					<label>Apellido*</label>
					<input ng-model="user.apellido" type="text" name="apellido" required/>
				</div>

				<div>
					<label>Numero Telefonico*</label>
					<input ng-model="user.telefono" type="text" name="telefono" required/>
				</div>

				<div>
					<label>Email*</label>
					<input ng-model="user.correo" type="email" name="correo" required/>
				</div>

				<div>
					<label>Colonia*</label>
					<input ng-model="user.colonia" type="text" name="colonia" required/>
				</div>

				<div>
					<label>Dirección*</label>
					<input ng-model="user.direccion" type="text" name="direcion" required/>
				</div>

				<div>
					<label>Referencias*</label>
					<input ng-model="user.referencias" type="text" name="referencias" required/>
				</div>

				<div>
					<label>Latitud:</label>
					<input ng-model="user.latitud" type="text" name="latitud" required disabled>
				</div>

				<div>
					<label>longitud:</label>
					<input ng-model="user.longitud" type="text" name="longitud" required disabled>
				</div>

				<button type="input" ng-click="saveformdata();">Actualizar</button>
			</form>
		</div>

		<div id="formdatos-1" class="row text-family-sans" hidden>

			<form action="./">
				<div>
					<label>Nombre*</label>
					<input ng-model="user.nombre" type="text" name="nombre" required/>
				</div>

				<div>
					<label>Apellido*</label>
					<input ng-model="user.apellido" type="text" name="apellido" required/>
				</div>

				<div>
					<label>Numero Telefonico*</label>
					<input ng-model="user.telefono" type="text" name="telefono" required/>
				</div>

				<button type="input" ng-click="saveformdata();">Actualizar</button>
			</form>
		</div>
		
	</div>
</cuerpo>