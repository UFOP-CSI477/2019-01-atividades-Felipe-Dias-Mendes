//VERIFICAR OS CAMPOS DE adicionar

function validarText(campo, alerta){

	if(campo.value.length == 0){
		//Erro
		document.getElementById(alerta).style.display = "block";

		campo.classList.add("is-invalid");

		campo.focus();
		return false;
		}
	//Tudo corrento

	document.getElementById(alerta).style.display="none";
	campo.classList.remove("is-invalid");
	campo.classList.add("is-valid");

	return true;
	}

function validarNumero(campo, alerta){
	var n = parseFloat(campo.value);

	if(campo.value.length == 0 || isNaN(n)){
		//Erro
		document.getElementById(alerta).style.display = "block";

		campo.classList.add("is-invalid");

		campo.focus();
		return false;
		}
	//Tudo corrento

	document.getElementById(alerta).style.display="none";
	campo.classList.remove("is-invalid");
	campo.classList.add("is-valid");

	return true;

	}

function validarSelect(campo, alerta){
	var n = parseFloat(campo.value);

	if(campo.value == 0){
		//Erro
		document.getElementById(alerta).style.display = "block";

		campo.classList.add("is-invalid");

		campo.focus();
		return false;
		}
	//Tudo corrento

	document.getElementById(alerta).style.display="none";
	campo.classList.remove("is-invalid");
	campo.classList.add("is-valid");

	return true;

	}


function validar(){
	var nome = document.getElementById("name");
	var largada = document.getElementById("larg");
	var tempo = document.getElementById("time");

	if(validarText(nome, "alertaNome") && 
		validarNumero(largada, "alertaLargada") && 
		validarNumero(tempo, "alertaTempo")
		/*Continua...*/ ){

		}

	}

function limparAUX(){
	var nome = document.nome;
	var largada = document.largada;
	var tempo = document.tempo;
	limpar(nome, "alertaNome", "labelNome");
	limpar(descricao, "alertaDescricao", "labelDescricao");
	limpar(codigo, "alertaCodigo", "labelCodigo");
	limpar(categoria, "alertaCategoria", "labelCategoria");
	limpar(quant, "alertaQuant", "labelQuant");
	limpar(medida, "alertaUni", "labelUni");
	limpar(custo, "alertaCusto", "labelCusto");
	limpar(venda, "alertaVenda", "labelVenda");
	limpar(forne, "alertaForne", "labelForne");
	limpar(garantia, "alertaGarantia", "labelGarantia");
	document.getElementById('aceite').checked == false;
	limparCheck("alertaAceite", "labelAceite");
	}

function limpar(campo, alerta){

	//campo == document.dados.valor;
	document.getElementById(alerta).style.display = "none";
	campo.classList.remove("is-invalid");
	campo.classList.remove("is-valid");

	}