function validarCadastroCliente() {
	var nome = document.cacl.nome.value;
	var registro = document.cacl.registro.value;
	var telefone = document.cacl.telefone.value;
	
	if(nome == '') {
		alert('Campo de "Nome" vazio!');
	} else if(registro == '') {
		alert('Campo de "RG" vazio!');
	} else if(telefone == '') {
		alert('Campo de "Telefone" vazio!');
}  else {
		alert('Cliente cadastrado com sucesso!');
	}
}


function validarCadastroFuncionario() {
	var nome = document.cafu.nome.value;
	var login = document.cafu.login.value;
	var senha = document.cafu.senha.value;
	
	if(nome == '') {
		alert('Campo de "Nome" vazio!');
	} else if(login == '') {
		alert('Campo de "E-mail" vazio!');
	} else if(senha == '') {
		alert('Campo de "Senha" vazio!');
}  else {
		alert('Funcionario enviado com sucesso!');
	}
}
function validarCadastroProdutos() {
	var nome = document.capr.nome.value;
	var valor = document.capr.valor.value;
	var tipo = document.capr.tipo.value;
	
	if(nome == '') {
		alert('Campo de "Nome" vazio!');
	} else if(valor == '') {
		alert('Campo de "Valor" vazio!');
	} else if(tipo == '') {
		alert('Campo de "Descrição" vazio!');
}  else {
		alert('Produto enviado com sucesso!');
	}
}

function validarContato() {
	var nome = document.contato.nome.value;
	var email = document.contato.email.value;
	var dados = document.contato.dados.value;
	
	if(nome == '') {
		alert('Campo de "Nome" vazio!');
	} else if(email == '') {
		alert('Campo de "E-mail" vazio!');
	} else if(dados == '') {
		alert('Campo de "Dados" vazio!');
}  else {
		alert('Contato enviado com sucesso!');
	}
}
