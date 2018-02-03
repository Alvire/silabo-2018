
/*Tiempo de alerta del flash mensage*/
$('div.alert').not('.alert-important').delay(2500).fadeOut(1150);
/*----------------fin de Tiempo de alerta del flash mensage*/

/*Dar funcionalidad al Nav en mobiles.*/
$(".button-collapse").sideNav();
/*----------------fin de Dar funcionalidad al Nav en mobiles.*/

/*inicializar los select*/
  $(document).ready(function() {
    $('select').material_select();
  });