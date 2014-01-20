$(document).ready(function(){
	console.log("document chargé");

	
		// on active le titre
		$('#map_btn span').addClass('active');
		$('#map_btn span').addClass('activeAfter');

	$('#photo_btn').click(function(){
		console.log("bouton photo");
		$('#photo').removeClass('OFF').addClass('ON');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('ON').addClass('OFF');

		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#photo_btn span').addClass('active');
		$('#photo_btn span').addClass('activeAfter');

		// size image rogne
		var cw = $('.rogneImg').width();
		$('.rogneImg').css({'height':cw+'px'});
		$( window ).resize(function() {
			var cw = $('.rogneImg').width();
			$('.rogneImg').css({'height':cw+'px'});
		});

		return false;
	});

	$('#map_btn').click(function(){
		console.log("bouton map");
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('OFF').addClass('ON');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('ON').addClass('OFF');

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
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('OFF').addClass('ON');
		$('#lien').removeClass('ON').addClass('OFF');

				// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#article_btn span').addClass('active');
		$('#article_btn span').addClass('activeAfter');

		// size image rogne
		var cw = $('.rogneArt').width();
		$('.rogneArt').css({'height':cw+'px'});
		$( window ).resize(function() {
			var cw = $('.rogneArt').width();
			$('.rogneArt').css({'height':cw+'px'});
		});

		return false;
	});

	$('#lien_btn').click(function(){
		console.log("bouton lien");
		$('#photo').removeClass('ON').addClass('OFF');
		$('#map').removeClass('ON').addClass('OFF');
		$('#article').removeClass('ON').addClass('OFF');
		$('#lien').removeClass('OFF').addClass('ON');

		// on desactive les autres titre
		$('.tt-wrapper span').removeClass('active');
		$('.tt-wrapper span').removeClass('activeAfter');
		
		// on active le titre
		$('#lien_btn span').addClass('active');
		$('#lien_btn span').addClass('activeAfter');
		

		return false;
	});
});