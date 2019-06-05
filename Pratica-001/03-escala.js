function validar(campo, alerta) {

  console.log("Validar: " + campo);

  //input[name='valorX']
  //#idDoCampo
  var n = parseFloat( $(campo).val() );

  if ( $(campo).val().length == 0 || isNaN(n)) {

    // Erro
    // Exibir alerta
    $(alerta).slideDown();

    // No input
    $(campo).addClass("is-invalid");

    $(campo).val("");
    $(campo).focus();
    return false;

  }

  // Tudo correto

  // Oculta alerta
  $(alerta).hide();
  // Remove classes
  $(campo).removeClass("is-invalid");
  // Adiciona classe ao input
  $(campo).addClass("is-valid");

  return true;

}

$(document).ready(function(){

  //$("button[name='calculo']")
  $("#calcula").click(function(){

    if ( validar( "input[name='amplitude']", "#alertaAmplitude")
      && validar( "input[name='intervalo']", "#alertaIntervalo") ) {

        var a = parseFloat( $("input[name='amplitude']").val() );
        var t = parseFloat( $("input[name='intervalo']").val() );

        var m = Math.log10(a) + 3*Math.log10(8*t) - 2.92;

        $("input[name='result']").val(m.toFixed(2));

        if(m < 3.5){
          // Exibir alerta
          $("#alerta0").slideDown();
          // Oculta alerta
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(m < 5.4){
          // Exibir alerta
          $("#alerta1").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(m < 6){
          // Exibir alerta
          $("#alerta2").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(m < 6.9){
          // Exibir alerta
          $("#alerta3").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(m < 7.9){
          // Exibir alerta
          $("#alerta4").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta5").hide();
        }else{
          // Exibir alerta
          $("#alerta5").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
        }

      } else {
        $("input[name='result']").val("");
      }



  });





});
