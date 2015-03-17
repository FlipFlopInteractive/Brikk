(function(){
  
function initialize() {
  console.log('map init');
  /*      var mapOptions = {
          center: { lat: -34.397, lng: 150.644},
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);*/
      }

  var styles = [
    {
      stylers: [
        { hue: "#00ffe6" },
        { saturation: -100 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
      ]
    }
  ];

  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.
  var mapOptions = {
    zoom: 17,
    center: new google.maps.LatLng(59.320867, 18.065029),
    disableDefaultUI: true,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  /*var image = 'images/marker/brikk_marker_google.png';*/
  var myLatLng = new google.maps.LatLng(59.320867, 18.065029);
  var beachMarker = new google.maps.Marker({
        icon:     {
        path:       'M10.8,3.4c-0.4,0-0.9,0.3-1.2,0.6l-6.5,7.7C2.9,12,2.7,12.6,2.7,13v11.5c0,0.4,0.3,0.7,0.7,0.7h32.9c0.4,0,0.9-0.3,1.2-0.6l6.5-8.1c0.3-0.3,0.5-0.9,0.5-1.3V4.2c0-0.4-0.3-0.7-0.7-0.7H10.8z M11.3,7.7c0.3-0.3,0.8-0.6,1.2-0.6h24.8c0.4,0,0.5,0.3,0.3,0.6l-2.3,2.8c-0.3,0.3-0.8,0.6-1.2,0.6H9.2c-0.4,0-0.5-0.3-0.3-0.6L11.3,7.7z M6.4,15.6c0-0.4,0.3-0.7,0.7-0.7h26c0.4,0,0.7,0.3,0.7,0.7v5.3c0,0.4-0.3,0.7-0.7,0.7h-26c-0.4,0-0.7-0.3-0.7-0.7V15.6z M38,18.2c-0.3,0.3-0.5,0.2-0.5-0.2v-3.6c0-0.4,0.2-1,0.5-1.3l2.3-2.8c0.3-0.3,0.5-0.2,0.5,0.2V14c0,0.4-0.2,1-0.5,1.3L38,18.2z',
        fillColor:    '#000000',
        fillOpacity:  1,
        strokeWeight:   0
      },
      position: myLatLng,
      map: map,
      /*icon: image*/
  });


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  google.maps.event.addDomListener(window, 'load', initialize);

})();