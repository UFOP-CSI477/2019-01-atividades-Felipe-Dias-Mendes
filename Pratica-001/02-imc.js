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

  	var peso = parseFloat( $("input[name='peso']").val() );
    var alt = parseFloat( $("input[name='altura']").val() );

    if(peso < 0){
        	// Erro
		    // Exibir alerta
		    $("#alertaPeso").slideDown();

		    // No input
		    $("input[name='peso']").addClass("is-invalid");

		    $("input[name='peso']").val("");
		    $("input[name='peso']").focus();
		    return false;
        }else{
        	// Oculta alerta
			  $("#alertaPeso").hide();
			  // Remove classes
			  $("input[name='peso']").removeClass("is-invalid");
        }

        if(alt < 0){
        	// Erro
		    // Exibir alerta
		    $("#alertaAltura").slideDown();

		    // No input
		    $("input[name='altura']").addClass("is-invalid");

		    $("input[name='altura']").val("");
		    $("input[name='altura']").focus();
		    return false;
        }else{
        	// Oculta alerta
			  $("#alertaAltura").hide();
			  // Remove classes
			  $("input[name='altura']").removeClass("is-invalid");
        }


    if ( validar( "input[name='peso']", "#alertaPeso")
      && validar( "input[name='altura']", "#alertaAltura")) {

        var res = peso/Math.pow(alt,2);

        $("input[name='result']").val(res.toFixed(2));

        if(res < 18.5){
          // Exibir alerta
          $("#alerta0").slideDown();
          // Oculta alerta
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(res < 24.9){
          // Exibir alerta
          $("#alerta1").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta2").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(res < 29.9){
          // Exibir alerta
          $("#alerta2").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta3").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(res < 34.9){
          // Exibir alerta
          $("#alerta3").slideDown();
          // Oculta alerta
          $("#alerta0").hide();
          $("#alerta1").hide();
          $("#alerta2").hide();
          $("#alerta4").hide();
          $("#alerta5").hide();
        }else if(res < 39.9){
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
