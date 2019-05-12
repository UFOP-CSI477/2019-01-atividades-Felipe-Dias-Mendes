//VERIFICAR OS CAMPOS DE CADASTRO

function validarText(campo, alerta, label){

	if(campo.value.length == 0){
		//Erro
		document.getElementById(alerta).style.display = "block";
		document.getElementById(label).classList.add("text-danger");

		campo.classList.add("is-invalid");

		campo.focus();
		return false;
	}
	//Tudo corrento

	document.getElementById(alerta).style.display="none";
	campo.classList.remove("is-invalid");
	campo.classList.add("is-valid");

	document.getElementById(label).classList.remove("text-danger");
	document.getElementById(label).classList.add("text-success");

	return true;
}

function validarNumero(campo, alerta, label){
	var n = parseFloat(campo.value);

	if(campo.value.length == 0 || isNaN(n)){
		//Erro
		document.getElementById(alerta).style.display = "block";
		document.getElementById(label).classList.add("text-danger");

		campo.classList.add("is-invalid");

		campo.focus();
		return false;
	}
	//Tudo corrento

	document.getElementById(alerta).style.display="none";
	campo.classList.remove("is-invalid");
	campo.classList.add("is-valid");

	document.getElementById(label).classList.remove("text-danger");
	document.getElementById(label).classList.add("text-success");
	return true;

}

function validar(){
	var nome = document.dados.nome;
	var descricao = document.dados.descricao;

	if(validarText(nome, "alertaNome", "labelNome") && 
		validarText(descricao, "alertaDescricao", "labelDescricao") &&
		validarText(codigo, "alertaCodigo", "labelCodigo")/*Continua...*/ ){

	}
	
	

}
