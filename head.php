<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/responsiveslides.css"/>
<link href="css/colorbox.css" rel="stylesheet" type="text/css"/>
<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="script/script.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>-->
<script type="text/javascript" src="script/responsiveslides.js"></script>
<!--<script type="text/javascript" src="script/jquery.cookiesdirective.js"></script>-->

<script type="text/javascript" src="script/jquery-scrollto.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-eu-cookie-law-popup.css"/>
<script src="script/jquery-eu-cookie-law-popup.js"></script> 
<script src="http://www.openlayers.org/api/OpenLayers.js"></script>

<script type="text/javascript">



/*
	window.onload = function () {
	var styles = 
	[{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}];

	var options1 = {
	mapTypeControlOptions: {
		mapTypeIds: ['Styled']
	},
	center: new google.maps.LatLng(51.738729, 19.537926),
	zoom: 14,
	disableDefaultUI: true,	
	mapTypeId: 'Styled'
};
	var options2 = {
	mapTypeControlOptions: {
		mapTypeIds: ['Styled']
	},
	center: new google.maps.LatLng(50.088127, 19.007246),
	zoom: 15,
	disableDefaultUI: true,	
	mapTypeId: 'Styled'
};
	var myLatlng1 = new google.maps.LatLng(51.738729, 19.537926);
	var div = document.getElementById('mapa1');
	var map = new google.maps.Map(div, options1);
	var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
	map.mapTypes.set('Styled', styledMapType);
	var marker1 = new google.maps.Marker({
                        position: myLatlng1,
                        map: map,
                        title: "SEW-EURODRIVE",
                        
                    });
				
	var myLatlng2 = new google.maps.LatLng(50.088127, 19.007246);
	var div = document.getElementById('mapa2');
	var map = new google.maps.Map(div, options2);
	var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
	map.mapTypes.set('Styled', styledMapType);
	var marker1 = new google.maps.Marker({
                        position: myLatlng2,
                        map: map,
                        title: "SEW-EURODRIVE",
                        
                    });

} */
$(document).ready(function(){	
			$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  5000);
		});	
</script>
<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->

</head>

<body>

	<div class="eupopup eupopup-container eupopup-container-bottomright ">
  <div class="eupopup-markup">
    <div class="eupopup-head">Wykorzystywanie cookies</div>
    <div class="eupopup-body">Nasza strona wykorzystuje pliki cookies. W ramach naszej witryny internetowej wykorzystujemy pliki cookies w celu optymalizacji jej funkcjonalności i zapewnienia komfortu użytkowania. Strona używa również pliki cookies pochodzące od podmiotów trzecich. Więcej informacji można uzyskać w naszej
	  <br /><a href="polityka.php" class="eupopup-button eupopup-button_2">"Informacji dotyczącej ochrony danych osobowych"</a>
	  <br />oraz<br /> 
	   <a href="polityka2.php" class="eupopup-button eupopup-button_2">"Warunkach korzystania ze stron internetowych".</a><br /><br />
	  Zamknięcie okienka oznacza, że użytkownik wyraża zgodę na wykorzystywanie plików cookies.
	</div>
    <div class="eupopup-buttons">
      <a href="#" class="eupopup-button eupopup-button_1">Zamknij</a>
    </div>
    <div class="clearfix"></div>
    <a href="#" class="eupopup-closebutton">x</a>
  </div>
</div> 
    
    <div id="main">
    	
        <div id="top">
			<div class="top_content">
				<div id="logo_div">
					<a href="index.php"><div id="logo"><img src="images/logo_top.png"></div></a>
				</div>
				
				<div class="menu_top">
				<ul id="menu_list">
					<li><a href="index.php" title="">Home</a></li>
					<li><a href="onas.php" title="">Firma</a></li>
					<li><a href="szkolenia.php" title="">Szkolenia</a>
						<ul>
							<li class="li_podkreslenie"><a href="szkolenia_n.php" title="">Inżynierskie SEW-EURODRIVE </a></li>
							<li class="li_podkreslenie"><a href="szkolenia_m.php" title="">Menadżerskie</a></li>
							<li class="li_podkreslenie"><a href="szkolenia_ms.php" title="">Microsoft Office </a></li>
							<li class="li_podkreslenie"><a href="szkolenia_cad.php" title="">Projektowanie 2D, 3D </a></li>
							<li><a href="szkolenia_sep.php" title="" style="height:49px;">Energetyczne uprawnienia kwalifikacyjne</a></li>
						</ul>
					</li>
					<li><a href="terminarz_k1.php" >Terminarz</a></li>
					<li><a href="kontakt.php" title="">Kontakt</a></li>
					<li><a href="https://www.SEW-EURODRIVE.pl/produkty/wyszukiwarka_produktow/wyszukiwarka_produktow.html" title="">Pełna oferta produktów</a></li>
				</ul>
				</div>
			</div>
        <div class="clear"></div>
        </div>
		
        <!--  head koniec  -->