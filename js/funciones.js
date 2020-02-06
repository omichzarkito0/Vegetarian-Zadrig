var longitud;
var latitud;

function mostrarPage(id){
	document.getElementById('inicio').hidden = true;
	document.getElementById('promociones').hidden = true;
	document.getElementById('adicionales').hidden = true;
	document.getElementById('especialidades').hidden = true;
	document.getElementById('arma').hidden = true;
	document.getElementById('carrito').hidden = true;

	document.getElementById(id).hidden = false;
}

var app = angular.module("AppAngular", ["LocalStorageModule"]);

app.controller("formcontroller", ["$scope", "localStorageService", function($scope, localStorageService){
	if(localStorageService.get("Session")){
		$scope.user = localStorageService.get("Session");
		if($scope.user.optentrega == 1){
			document.getElementById('formdatos-data-2').hidden = false;
		}else{

			document.getElementById('formdatos-data-1').hidden = false;
		}

		document.getElementById('menu-especialidades-1').style.color = "white";
		document.getElementById('menu-especialidades-1').style.borderBottom = "2px solid white";
		mostrarPage('especialidades');
	}else{
		document.getElementById('menu-promociones').style.display = "none";
		document.getElementById('menu-adicionales').style.display = "none";
		document.getElementById('menu-especialidades').style.display = "none";
		document.getElementById('menu-arma').style.display = "none";
		document.getElementById('menu-carrito').style.display = "none";

		document.getElementById('menu-inicio-1').style.color = "white";
		document.getElementById('menu-inicio-1').style.borderBottom = "2px solid white";
		mostrarPage('inicio');
		$scope.user = {
			nombre: "",
			apellido: "",
			telefono: "",
			correo: "",
			colonia: "",
			direccion: "",
			referencias: "",
			latitud: "",
			longitud: "",
			optentrega: -1,
			newBurger: [{
				cantidad: 0,
				id: 0,
				precio: 0,
				pedido: "Armada",
				carne: 1,
				quesoAmarillo: 0,
				quesoBlanco: 0,
				catsup: true,
				mayonesa: true,
				mostaza: true,
				lechuga: true,
				jitomate: true,
				cebollar: true,
				chileEnVinagre: true,
				zanahoria: true,
				pureDePapa: true,
				cebollaAsada: true,
				chileToreado: true
			}],
			burgers: []
		};
	}

	$scope.openForm = function(opt){
		document.getElementById('opt-entrega').hidden = true;
		$scope.user.optentrega = opt;
		$scope.user.latitud = latitud;
		$scope.user.longitud = longitud;
		if(opt){
			document.getElementById('formdatos-data-1').hidden = true;
			document.getElementById('formdatos-2').hidden = false;
			document.getElementById('formdatos-data-2').hidden = false;
		}else{
			document.getElementById('formdatos-data-2').hidden = true;
			document.getElementById('formdatos-1').hidden = false;
			document.getElementById('formdatos-data-1').hidden = false;
		}
	}

	$scope.saveformdata = function(){
		localStorageService.set("Session", $scope.user);
	}

	$scope.clearformdata = function(){
		localStorage.clear();
		location.href="./";
	}
}]);


function mostrarMenu(id){
	document.getElementById('menu-inicio-1').style.borderBottom = "0px";
	document.getElementById('menu-promociones-1').style.borderBottom = "0px";
	document.getElementById('menu-adicionales-1').style.borderBottom = "0px";
	document.getElementById('menu-especialidades-1').style.borderBottom = "0px";
	document.getElementById('menu-arma-1').style.borderBottom = "0px";
	document.getElementById('menu-carrito-1').style.borderBottom = "0px";
	document.getElementById('menu-inicio-1').style.color = "#9d9d9d"
	document.getElementById('menu-promociones-1').style.color = "#9d9d9d"
	document.getElementById('menu-adicionales-1').style.color = "#9d9d9d"
	document.getElementById('menu-especialidades-1').style.color = "#9d9d9d"
	document.getElementById('menu-arma-1').style.color = "#9d9d9d"
	document.getElementById('menu-carrito-1').style.color = "#9d9d9d"

	document.getElementById(id).style.color = "white";
	document.getElementById(id).style.borderBottom = "2px solid white";

	var page = "";
	for(var i = 5; i < id.length - 2; i++){
		page += id[i];
	}
	mostrarPage(page);
}

function detailsExit(){
	document.getElementById("details-fondo").style.display = "none";
}

function detailsOpen(id){
	document.getElementById("details-fondo").style.display = "flex";
	if(!id){
		document.getElementById("detailsContent").innerHTML = "1 carne de ####, Pure de Papa, Guacamole";
	}
}