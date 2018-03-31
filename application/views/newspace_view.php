<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>Add Grave | Manila South Cemetery</title>
    <style>
      #map {
        height: 100%;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

  #info-box {
        background-color: white;
        bottom: 30px;
        height: 50px;
        padding: 5px;
        position: absolute;
        left: 30px;
      }
    </style>
    </head>

  <body>
    <div id="map"></div>
    <div id="info-box">
    <input type="radio" id = "myradio2" name="view" onclick="please(this.value)" value = "noloc">No graves<br />
    <input type="radio" id = "myradio3" name="view" onclick="please(this.value)" value = "yesloc">Display graves<br />
  </div>
 
    
  <script>
    var map;
    var marker;
var gmarkers = [];
    var infowindow;


  var gravestatLabel = {
       sale: {
        icon: pinSymbol("#FF0000")
        //label: 'Sale'
      },
      occupied: {
        icon: pinSymbol("#00FF00")
        //label: 'Occ'
      },
      vacant: {
        icon: pinSymbol("#FFFF00")
        //label: 'Vac'
      }
    };

    function pinSymbol(color) {
    return {
        path: 'M 0,0 C -2,-20 -10,-22 -10,-30 A 10,10 0 1,1 10,-30 C 10,-22 2,-20 0,0 z M -2,-30 a 2,2 0 1,1 4,0 2,2 0 1,1 -4,0',
        fillColor: color,
        fillOpacity: 1,
        strokeColor: '#000',
        strokeWeight: 2,
        scale: 1,
   };
}

function please(value){
    if(value=="noloc"){
      var x = document.getElementById("myradio2");
      if(x.checked = true){
        noshowgrave();
      } 
    }
    else if(value=="yesloc"){
      var x = document.getElementById("myradio3");
      if(x.checked = true){
        showgrave();
      } 
    }
  }

    function initMap() {
      var latlng = new google.maps.LatLng(14.5657, 121.0194);
      var options = {
        zoom: 17,
        center: latlng,
      mapTypeId: 'satellite'
      }
      
      map = new google.maps.Map(document.getElementById("map"), options);

   var html = "<table>" +
                 "<tr><td>Section:</td> <td><input type='text' id='section'/></td> </tr>" +
                 "<tr><td>Lot:</td> <td><input type='text' id='lot'/> </td> </tr>" +
                 "<tr><td>Grave:</td> <td><input type='text' id='grave'/></td> </tr>" +
                "<tr><td>Status:</td> <td><select id='status'>" +
                 "<option value='available' SELECTED>Available</option>" +
                 "<option value='sold'>Sold</option>" +
                 "<option value='soldwburial'>Sold with Burial</option>" +
                 "<option value='reserved'>Reserved</option>" +
                 "<option value='restricted'>Restricted</option>" +
                 "</select> </td></tr>" +
                "<tr><td></td><td><input type='button' value='Save & Close' onclick='saveData()'/></td></tr>";
      
                 infowindow = new google.maps.InfoWindow({
     content: html
    });

    google.maps.event.addListener(map, "click", function(event) {
        marker = new google.maps.Marker({
          position: event.latLng,
          map: map
        });
          infowindow.open(map, marker);
    });
    }

    function saveData() {
      //var classy = escape(document.getElementById("class").value);
      //var type = escape(document.getElementById("type").value);
      var section = escape(document.getElementById("section").value);
      var lot = escape(document.getElementById("lot").value);
      var grave = escape(document.getElementById("grave").value);
      var latlng = marker.getPosition();
      var status = escape(document.getElementById("status").value);

      var url = 'http://localhost/2018/maps/modsavelocation.php?section=' + section + '&lot=' + lot + '&grave=' + grave + '&lat=' + latlng.lat() + '&lng=' + latlng.lng() + '&stat=' + status;
            
      downloadUrl(url, function(data, responseCode) {
          if (responseCode == 200 && data.length >= 1) {
          infowindow.close();
          alert(data);
          alert(responseCode);
          alert("Location added successfully!");
        }
        else{
          alert(responseCode);

        }
      });
    }

     function showgrave(){

  infoWindow = new google.maps.InfoWindow;

      downloadUrl('http://localhost/2018/maps/modmscgraves.php', function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('grave');
        Array.prototype.forEach.call(markers, function(markerElem) {
        var id = markerElem.getAttribute('id');
        var sect = markerElem.getAttribute('sect');
        var lot = markerElem.getAttribute('lot');
        var gra = markerElem.getAttribute('gra');
        var stat = markerElem.getAttribute('stat');
        var point = new google.maps.LatLng(
            parseFloat(markerElem.getAttribute('lat')),
            parseFloat(markerElem.getAttribute('longt')));
          
    var infowincontent = document.createElement('div');
        
        var gid = document.createElement('strong');
          gid.textContent =  "Grave ID: "+id;
          infowincontent.appendChild(gid);
          infowincontent.appendChild(document.createElement('br'));

    var locsec = document.createElement('text');
          locsec.textContent =  "Section: "+sect;
          infowincontent.appendChild(locsec);
          infowincontent.appendChild(document.createElement('br'));

        var loclot = document.createElement('text');
          loclot.textContent = "Lot: "+lot;
          infowincontent.appendChild(loclot);
          infowincontent.appendChild(document.createElement('br'));

        var locgrnum = document.createElement('text');
          locgrnum.textContent = "Grave number: "+gra;
          infowincontent.appendChild(locgrnum);
          infowincontent.appendChild(document.createElement('br'));

        var locstat = document.createElement('text');
          locstat.textContent = "Status: "+stat;
          infowincontent.appendChild(locstat);
          infowincontent.appendChild(document.createElement('br'));


              var marker = new google.maps.Marker({
                map: map,
                position: point,
                icon: gravestatLabel[stat].icon
              
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
              gmarkers.push(marker)
        });
        
      });
  }


  function noshowgrave(){
    for (var i = 0; i < gmarkers.length; i++) {
          gmarkers[i].setMap(null);
    }
  }


    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }


    function doNothing() {}
    
  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHxLXKVPC1Id4pw4FgIo6BfUSsLgCfgXw&callback=initMap"
            type="text/javascript"></script>

    </script>
  
  </body>

</html>