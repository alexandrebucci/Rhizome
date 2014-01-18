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

    $( "#menu_a_mobile" ).click(function() {
      $( "#rubriques" ).slideToggle( "slow", function() {
        // Animation complete.
      });
    });

});

