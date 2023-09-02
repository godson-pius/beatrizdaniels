google_api_map_init();
function google_api_map_init() {
    var map;
    var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068, 14));

    function initialize() {
        var mapOptions = {
            zoom: 14,
            center: coordData,
            scrollwheel: false
        }

        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    }

    google.maps.event.addDomListener(window, "load", initialize);
}