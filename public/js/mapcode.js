function initialize() {
    "use strict";
    var e = {
            zoom: 15,
            scrollwheel: !1,
            center: new google.maps.LatLng(36.5994153, 3.0897048,98)
        },
        o = new google.maps.Map(document.getElementById("googleMap"), e);
    new google.maps.Marker({
        position: o.getCenter(),
        animation: google.maps.Animation.BOUNCE,
        icon: "img/map-marker.png",
        map: o
    })
}
google.maps.event.addDomListener(window, "load", initialize);
