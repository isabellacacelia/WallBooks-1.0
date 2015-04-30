<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Aluno';
</script>

<main>
	<div class="container"> 
	<br/>
	 <div class="row">
		<form class="col s12">
		
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Nome do Aluno" id="nome" type="text" class="validate">
			  <label for="nome">Nome</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Registro Acadêmico" id="ra" type="text" class="validate">
			  <label for="ra">RA</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Digite a senha padrão" id="senha" type="password" class="validate">
			  <label for="senha">Senha</label>
			</div>
			<div class="input-field col s6">
			  <input type="date" class="datepicker" placeholder="Escolha a data de nascimento" id="nascimento">
			  <label for="nascimento">Data de Nascimento</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Digite o e-mail" id="email" type="email" class="validate">
			  <label for="email">E-mail</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Rua Bolinha, número 000, Bairro Amarela - Cidade/UF " id="endereco" type="text" class="validate">
			  <label for="endereco">Endereço</label>
			</div>
		  </div>
			
			<div class="row">
			<div class="col s6">
			<label >Gênero</label>
			<div class="input-field alunoGenero">
			<input name="grupoGenero" type="radio" id="fem" />
			  <label for="fem">Feminino</label>
			  <input class="radioPesq" name="grupoGenero" type="radio" id="masc" />
			  <label for="masc">Masculino</label>
			</div>
			</div>
			<div class="col s6"></div>
		  </div>
		</form>
		</div>	
		<button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
			    <i class="mdi-content-send right"></i>
	  		</button>
	</div>
</main>