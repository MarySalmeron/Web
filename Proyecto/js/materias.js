$(document).ready(function(){
    $.ajax({
      type: 'POST',
      url: '../logic_php/nivel.php',
      data: {'nivel': 'p_nivel'}
    })
    .done(function(nivel){

    })
    .fail(function(){
        alert('Error al cargar el nivel')
    })
})