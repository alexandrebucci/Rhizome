$(document).ready(function(){
	console.log("document chargé");

	
		// on active le titre
		$('#map_btn span').addClass('active');
		$('#map_btn span').addClass('activeAfter');
		var divActive = $('#map');
		
	$('#photo_btn').click(function(){
		console.log("bouton photo");
				
		// on fade out l ancienne div active
		 divActive.animate({'opacity':'0'},function(){
			// on supprime l ancienne dive active 
		 	divActive.removeClass('ON').addClass('OFF');
			
			// on affiche la nouvelle div active
			$('#photo').removeClass('OFF').addClass('ON');
			
			// on resize la div
			var cw = $('.rogneImg').width();
				$('.rogneImg').css({'height':cw+'px'});
				$( window ).resize(function() {
					var cw = $('.rogneImg').width();
					$('.rogneImg').css({'height':cw+'px'});
			});
			// on l'affiche
			 $('#photo').animate({'opacity':'1'},function(){				
				// on affecte la nouvelle div active
				divActive = $('#photo');
			 });
		 });
		 

	
		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#photo_btn span').addClass('active');
		$('#photo_btn span').addClass('activeAfter');


		
		
		return false;
	});

	$('#map_btn').click(function(){
		console.log("bouton map");
		
		// on fade out l ancienne div active
		 divActive.animate({'opacity':'0'},function(){
			// on supprime l ancienne dive active 
		 	divActive.removeClass('ON').addClass('OFF');
			
			// on affiche la nouvelle div active
			$('#map').removeClass('OFF').addClass('ON');

			// on l'affiche
			 $('#map').animate({'opacity':'1'},function(){				
				// on affecte la nouvelle div active
				divActive = $('#map');
			 });
		 });

		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#map_btn span').addClass('active');
		$('#map_btn span').addClass('activeAfter');

		$( window ).resize(function() {
			var rogne2 = $('#description img').height();
			console.log(rogne2);
			$('#descriptionLieu').css({'height':(rogne2-15)+'px'});
		});

		return false;
	});

	$('#article_btn').click(function(){
		console.log("bouton article");
		
		// on fade out l ancienne div active
		 divActive.animate({'opacity':'0'},function(){
			// on supprime l ancienne dive active 
		 	divActive.removeClass('ON').addClass('OFF');
			
			// on affiche la nouvelle div active
			$('#article').removeClass('OFF').addClass('ON');
			
			// on resize la div
			var cw = $('.rogneArt').width();
					$('.rogneArt').css({'height':cw+'px'});
			$( window ).resize(function() {
				var cw = $('.rogneArt').width();
				$('.rogneArt').css({'height':cw+'px'});
			});
			// on l'affiche
			 $('#article').animate({'opacity':'1'},function(){				
				// on affecte la nouvelle div active
				divActive = $('#article');
			 });
		 });
				  

		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#article_btn span').addClass('active');
		$('#article_btn span').addClass('activeAfter');

		
		
		
		return false;
	});

	$('#lien_btn').click(function(){
		console.log("bouton lien");
		
		// on fade out l ancienne div active
		 divActive.animate({'opacity':'0'},function(){
			// on supprime l ancienne dive active 
		 	divActive.removeClass('ON').addClass('OFF');
			
			// on affiche la nouvelle div active
			$('#lien').removeClass('OFF').addClass('ON');

			// on l'affiche
			 $('#lien').animate({'opacity':'1'},function(){				
				// on affecte la nouvelle div active
				divActive = $('#lien');
			 });
		 });
		 
		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#lien_btn span').addClass('active');
		$('#lien_btn span').addClass('activeAfter');
		

		return false;
	});
});