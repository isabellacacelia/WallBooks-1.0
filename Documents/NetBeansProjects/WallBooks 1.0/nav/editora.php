<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Editora';
</script>


<main >
<div class="container" >
  <br/>
	   <div class="row">
		<form class="col s12">
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="00.000.000/0000-00" id="cnpj" type="text" class="validate" maxlength="18">
			  <label for="cnpj">CNPJ</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Digite o nome da editora" id="name" type="text" class="validate" maxlength="80">
			  <label for="name">Nome</label>
			</div>
			</div>
			
		 <div class="row">
			<div class="col s6">
			<label >Status</label>
			<div class="input-field alunoGenero">
			<input name="grupoGenero" type="radio" id="fem" />
			  <label for="fem">Disponível</label>&nbsp;
			  <input class="radioPesq" name="grupoGenero" type="radio" id="masc" />
			  <label for="masc">Indisponível</label>
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