        <div id="fotter">
        	
        	<div id="bottom" align="right">
            	<a class="logo_bottom" href="index.php"><img src="images/logo_bottom.png" align="left" title="SEW-EURODRIVE" alt="SEW-EURODRIVE"/></a>
               
            </div>
            <div class="linia"></div>
            <div class="bot_lvl2">
			 <div id="bot_menu">
                	<span><a href="index.php">Home</a></span>|
                	<span style="margin-left:5px;"><a href="onas.php">Firma</a></span>|
                	<span style="margin-left:5px;"><a href="szkolenia.php">Szkolenia</a></span>|
                	<span style="margin-left:5px;"><a href="terminarz_k1.php">Terminarz</a></span>|
                    <span style="margin-left:5px;"><a href="kontakt.php">Kontakt</a></span>| 
                    <span style="margin-left:5px;"><a href="polityka.php">Polityka prywatności</a></span>
					<span style="margin-left:5px;"><a href="polityka2.php">Warunki korzystania ze stron internetowych</a></span>
                    <span style="margin-left:5px;"><a href="https://www.SEW-EURODRIVE.pl/produkty/wyszukiwarka_produktow/wyszukiwarka_produktow.html" title="">Pełna oferta produktów</a></span>
					
                </div>
			
			<div id="podpis">
            	
    © 2018 SEW-EURODRIVE


            </div>
			<div class="clear"></div>
			</div>
        
        </div>
   	</div>
	
	 <script type="text/javascript">

  
  var zoom=16
  
   map1 = new OpenLayers.Map("mapa1");
   map1.addLayer(new OpenLayers.Layer.OSM());

   var lonLat1 = new OpenLayers.LonLat( 19.537926, 51.738729 )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map1.getProjectionObject() // to Spherical Mercator Projection
          );
          
    ;

    var markers1 = new OpenLayers.Layer.Markers( "Markers" );
    map1.addLayer(markers1);
    
    markers1.addMarker(new OpenLayers.Marker(lonLat1));
    
    map1.setCenter (lonLat1, zoom);
	
	
	
	map2 = new OpenLayers.Map("mapa2");
   map2.addLayer(new OpenLayers.Layer.OSM());

   var lonLat2 = new OpenLayers.LonLat( 19.007246, 50.088127 )
          .transform(
            new OpenLayers.Projection("EPSG:4326"), // transform from WGS 1984
            map2.getProjectionObject() // to Spherical Mercator Projection
          );
          

    var markers2 = new OpenLayers.Layer.Markers( "Markers" );
    map2.addLayer(markers2);
    
    markers2.addMarker(new OpenLayers.Marker(lonLat2));
    
    map2.setCenter (lonLat2, zoom);
    </script>
</body>
</html>
