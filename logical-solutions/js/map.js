var map, marker
var latLng = {
  lat:32.955873,
  lng: -96.708707
}

var zoomLevel = function() {
  if (window.innerWidth < 768) return 14
  else return 17
}


function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: latLng,
    zoom: zoomLevel(),
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    rotateControl: false,
    fullscreenControl: false,
    draggable: false,
    scrollwheel: false,
    styles: [{"stylers":[{"hue":"#26355B"},{"saturation":35}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}]
  })

  marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: 'Hello World!'
  })

  google.maps.event.addDomListener(window, "resize", function() {
		var center = map.getCenter();
		google.maps.event.trigger(map, "resize");
		map.setZoom(zoomLevel())
		// google.maps.event.trigger(map.zoom, zoomLevel());
		map.setCenter(center);

	});
}

module.exports = initMap
