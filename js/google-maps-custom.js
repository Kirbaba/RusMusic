/*
 * Created with Sublime Text 2.
 * User: song.chen
 * Date: 2015-12-01
 * Time: 15:36:56
 * Contact: song.chen@qunar.com
 */
/*-------------GOOGLE MAPS-----------------*/

function initialize() {

    var myLatlng = new google.maps.LatLng(55.757565,37.61206390000007);
    // var mapOptions = {
    //     center: new google.maps.LatLng(55.738649,37.6379400),
    //     zoom: 17,
    //     mapTypeId: google.maps.MapTypeId.ROADMAP,
    //     scrollwheel: false
    // };
    // var map = new google.maps.Map(document.getElementById("map_canvas"),
    //     mapOptions);
    // var marker = new google.maps.Marker({
    //     position: myLatlng,
    //     map: map,
    //     title:""
    // });
   // Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#00ffe6" },
        { saturation: -20 }
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
        { visibility: "off" }
      ]
    }
  ];

  // Create a new StyledMapType object, passing it the array of styles,
  // as well as the name to be displayed on the map type control.
  var styledMap = new google.maps.StyledMapType(styles,
    {name: "Styled Map"});

  // Create a map object, and include the MapTypeId to add
  // to the map type control.

    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    var isDraggable = w > 480 ? true : false;

  var mapOptions = {
        center: new google.maps.LatLng(55.756107, 37.613662),
        zoom: 17,
        draggable: isDraggable,
         mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        },
        scrollwheel: false
   
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'),
    mapOptions);

  var image2 = new google.maps.MarkerImage( img.url + 'MAP_MARKER.png', // иконка
        new google.maps.Size(58,70) // размеры иконок
        /*new google.maps.Point(0,0)*/
    );

  
    var marker = new google.maps.Marker({
        icon: image2,
        position: myLatlng,
        map: map,
        title:"We are here!",
        draggable: false,
        raiseOnDrag: false
    });


  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_canvas', styledMap);
  map.setMapTypeId('map_canvas');

}



function loadScript() {
    var script = document.createElement("script");
    script.type = "text/javascript";
    script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyAaOWKyamSxMTXclSDFmJ2N4Am20PCTD6I&sensor=FALSE&callback=initialize";
    document.body.appendChild(script);
}

window.onload = loadScript;