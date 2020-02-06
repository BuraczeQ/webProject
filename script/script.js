jQuery(document).ready(function($){
	
	$('#zaplanuj_szkolenie').hide();	
	$('.swoje_szkolenie').click(function(){
		
		$('#zaplanuj_szkolenie').toggle("slow");
		$('#zaplanuj_szkolenie').ScrollTo();
		
	});	
		
		
		var cookieScripts = function () {
			console.log("Running");
		
			
		}
		
		$.cookiesDirective({
			privacyPolicyUri: 'polityka.php',
			explicitConsent: false,
			position : 'bottom',
			scriptWrapper: cookieScripts, 
			cookieScripts: null, 
			backgroundColor: '#ff0000',
			linkColor: '#ffffff'
		});
	
	
	$("#slider1").responsiveSlides({
        speed: 800
      });
		
});