var map;
var initialize;
var marker;
 
initialize = function(){
  var latLng = new google.maps.LatLng(47.5099792, 6.8016417); // Correspond au coordonnées de Montbeliard
  var myOptions = {
    zoom      : 15,
		center 		: latLng,
    mapTypeId : google.maps.MapTypeId.ROADMAP, // Type de carte, différentes valeurs possible HYBRID, ROADMAP, SATELLITE, TERRAIN
    maxZoom   : 20
  };
 
  map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);
};

//Création de la carte
initialize();
//Si les champs lat et long sont remplis
if (document.getElementById('indice_lat').value != "" && document.getElementById('indice_long').value !=""){
	//Affichage du markeur sur la position dans la BDD lorsqu'on souhaite modifier l'indice
	marker = new google.maps.Marker({
	  position: new google.maps.LatLng(document.getElementById('indice_lat').value, document.getElementById('indice_long').value),
	  map: map
	});
	//On centre la map sur le marker
	map.setCenter(marker.getPosition());
}

//Ajout d'un nouveau marker à la position cliquée et remplissage des champs lat et long du formulaire
google.maps.event.addListener(map, 'click', function( event ){
	//On rempli les champs lat et long avec les valeurs de l'emplacement cliqué
	document.getElementById('indice_lat').value = event.latLng.lat();
	document.getElementById('indice_long').value = event.latLng.lng();
	//Si il y a deja un marker on le retire de la map
  if (marker != null){
  	marker.setMap(null);
  }
  //On positionne un marker à l'emplacement cliqué
  marker = new google.maps.Marker({
    position: new google.maps.LatLng(event.latLng.lat(),event.latLng.lng()),
    map: map,
    draggable:true
	});
//alert( "Latitude: "+event.latLng.lat()+" "+", longitude: "+event.latLng.lng() ); 
});