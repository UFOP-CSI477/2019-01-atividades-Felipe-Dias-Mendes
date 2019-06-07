function validar(campo, alerta) {

  console.log("Validar: " + campo);

  //input[name='valorX']
  //#idDoCampo
  var n = parseFloat( $(campo).val() );

  if ( $(campo).val().length == 0) {

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

class competidor{
    constructor(nome, larg, time){
    	this.nome = nome;
    	this.larg = larg;
    	this.time = time;
    }	
 }

 var competidores = [];



$(document).ready(function(){

  //$("button[name='calculo']")
  $("#adiciona").click(function(){


    if ( validar( "input[name='nome']", "#alertaNome")
      && validar( "input[name='largada']", "#alertaLargada")
      	&& validar("input[name='tempo']", "#alertaTempo")) {

    	var nome = $("input[name='nome']").val();
    	var larg = parseFloat( $("input[name='largada']").val() );
    	var time = parseFloat( $("input[name='tempo']").val() );

    	var compet = new competidor(nome, larg, time);

    	if(competidores.length < 5){
    		competidores.push(compet);
    		
    		//inserindo na tabela de preview
    		var novalinha = $("<tr>");
    		var cols = "";


    		cols += '<td>'+larg+'°</td>';
    		cols += '<td>'+nome+'</td>';
    		cols += '<td>'+time+'s</td>';
    		
    		novalinha.append(cols);
    		$("#preview").append(novalinha);

    		//novalinha.insertCell(1).innerHTML = name.value;
    		//novalinha.insertCell(2).innerHTML = t.value;
    		//"#preview".appendChild(novalinha);
    	}

      }

  });

	
  $("#result").click(function(){

  	$("#view").slideDown();
  	
  	competidores.sort(function(a, b){return a.time - b.time});

  	var j = 0;
  	var menor = competidores[j].time;
  	while(j < competidores.length){

  		if(menor > competidores[j].time){
  			menor = competidores[j].time;
  		}

  		++j;
  	}

  	var i = 0;
  	var posi = 1;
  	while(i < competidores.length){

  		var larg = competidores[i].larg;
  		var nome = competidores[i].nome;
  		var time = competidores[i].time;
  		var control = 0;

  		//inserindo na tabela de preview
    		var novalinha = $("<tr>");
    		var cols = "";

    		if (menor == time) {
    		cols += '<td>'+1+'°</td>';
    		cols += '<td>'+larg+'°</td>';
    		cols += '<td>'+nome+'</td>';//nome
    		cols += '<td>'+time+'s</td>';
    		cols += '<td>Vencedor(a)</td>';
    		posi = 1;
    		}else{
    			cols += '<td>'+posi+'°</td>';
    			cols += '<td>'+larg+'°</td>';
    			cols += '<td>'+nome+'</td>';//nome
    			cols += '<td>'+time+'s</td>';
    			cols += '<td> - </td>';
    		}
    		//cols += '<td>'+winner+'s</td>';
    		
    		novalinha.append(cols);
    		$("#view").append(novalinha);


    	++posi;
  		++i;
  	}


  });

});
