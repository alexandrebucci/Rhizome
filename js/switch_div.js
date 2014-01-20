// function afficher_cacher()
// {
//     if(document.getElementById('rubriques').style.visibility=="visible")
//     {
//         document.getElementById('rubriques').style.visibility="hidden";
//     }
//     else
//     {
//         document.getElementById('rubriques').style.visibility="visible";
//     }
// }
$(document).ready(function(){

    // $( "#menu_a_mobile" ).click(function() {
    //   $( "#rubriques" ).slideToggle( "slow", function() {
    //     // Animation complete.
    //   });
    // });
    var open  = true;


    $( "#menu_a_mobile" ).click(function() {
        
        var largeMobile = $('#menu_mobile').width()-208;
        var heightMobile = $('.ban').height();

        $('#rubriques ul li').css({'height':(heightMobile/3)+'px'});

        console.log(largeMobile);

        if (open){
            $('#rubriques').animate({'width':largeMobile+'px','right':0});
            open = false;

        }else{
            console.log('off');
            $('#rubriques').animate({'right':-largeMobile+'px'});
            open = true;
        }

    });
            

        /*if($('#rubriques').css('right') == '-478px')
                {$('#rubriques').animate({right:'+=478px'});}     //Affiche .nav
            else
                {$('#rubriques').animate({right:'-=478px'});}     //Masque .nav
            return false;*/
        $( window ).resize(function() {
                var largeMobile2 = $('#menu_mobile').width()-208;
               var heightMobile2 = $('.ban').height();
               $('#rubriques ul li').css({'height':(heightMobile2/3)+'px'});
                $('#rubriques').css({'width':largeMobile2+'px','right':0});


            });

});

