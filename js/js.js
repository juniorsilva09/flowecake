
//Mascaras
var $numero = $(".numero");
$numero.mask('(00) 0000-00000000', {reverse: false});





//AJAX
$('#capturarDados').click(function(e){
  e.preventDefault();
  var valores = $('#captura').serialize();
  
  $.ajax({
    type: 'POST',
    dataType: 'HTML',
    url: 'http://localhost/flowercakenovageracao/ajax/ajax.php', 
    data: {'valores':valores}, 
    beforeSend: function(){
      
  },
  success: function(mensagem) 
  {

    $('.alerta').append(mensagem);
  },

  error: function(mensagem)
  {
    $('#payForm').append(mensagem);
  }
});
return false;
 });



$(window).on('click', function(){
  setTimeout(function() { 
  $('.alertM').fadeOut();
  }, 1500);
})



