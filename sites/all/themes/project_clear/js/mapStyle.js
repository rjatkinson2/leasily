// Style Gmap using JSON 
(function ($) {
  Drupal.gmap.addHandler('gmap', function(elem) {
    var obj = this;
      obj.bind("boot", function () {
        obj.opts.styles = [
        	{ 
        	"featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#ADD8DD" }, { "lightness": -11 } ] },{ "featureType": "poi.park", "stylers": [ { "color": "#ACDDB2" }, { "lightness": -10 } ] },{ "featureType": "road.highway", "elementType": "geometry", "stylers": [ { "color": "#F29B30" }, { "gamma": 1.24 }, { "saturation": 32 }, { "lightness": 6 } ] },{ "featureType": "landscape.man_made", "stylers": [ { "color": "#FFFEF1" }, { "weight": 0.1 }, { "saturation": -100 } ] },{ "featureType": "landscape.man_made", "elementType": "geometry", "stylers": [ { "color": "#E1EDDB" }, { "lightness": 25 } ] },{ "featureType": "poi.business", "elementType": "geometry", "stylers": [ { "color": "#3C855C" }, { "lightness": 80 } ] },{ "featureType": "poi.school", "elementType": "geometry", "stylers": [ { "color": "#808080" }, { "lightness": 74 } ] },{ "featureType": "poi.medical", "elementType": "geometry", "stylers": [ { "color": "#808080" }, { "lightness": 60 } 
        	]
        	 }
        	  ]
        	  obj.map = new google.maps.Map(elem, obj.opts);
      });
    });
})(jQuery);
        	  