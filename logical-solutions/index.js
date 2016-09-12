require('./styles/index.sass')
require('./js/dev-env')
require('./js/map')
require('./js/vues')


var map, marker
var latLng = {
  lat:32.955873,
  lng: -96.708707
}

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: latLng,
    zoom: 17,
    zoomControl: false,
    mapTypeControl: false,
    scaleControl: false,
    streetViewControl: false,
    rotateControl: false,
    fullscreenControl: false,
    draggable: false,
    scrollwheel: false,
    styles: [{"stylers":[{"hue":"#153265"},{"saturation":35}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":50},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]}]
  })

  marker = new google.maps.Marker({
    position: latLng,
    map: map,
    title: 'Hello World!'
  });
}

window.initMap = initMap
