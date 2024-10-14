// -- code below controls the mobile navigation
function openNav() {
  $('#openCloseNav').css("display", "block"); // -- show navigation
  $('body').css("overflow-y", "hidden"); // -- hide <body> vertical oveflow
}

function closeNav() {
  $('#openCloseNav').css("display", "none"); // -- hide navigation
  $('body').css("overflow-y", "visible"); // -- show <body> vertical oveflow
}
$('#openCloseNav a').click(function(){
  closeNav();
});