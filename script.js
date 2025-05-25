$(document).ready(function(){
    $(".toggle-info").click(function(){
      $(this).next(".descripcion").fadeToggle();
    });
  });