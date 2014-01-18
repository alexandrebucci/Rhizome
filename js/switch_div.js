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
    $( "#menu_a_mobile" ).click(function() {
        if($('#rubriques').css('right') == '-478px')
                {$('#rubriques').animate({right:'+=478px'});}     //Affiche .nav
            else
                {$('#rubriques').animate({right:'-=478px'});}     //Masque .nav
            return false;
    });

});

