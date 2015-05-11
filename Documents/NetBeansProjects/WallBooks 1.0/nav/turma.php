<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Turma';
</script>


<main >
<div class="container" >
  <br/>
	   <div class="row">
		<form class="col s12">
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="2A" id="nome" type="text" class="validate" maxlength="18">
			  <label for="nome">Nome</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Digite o código da turma" id="codigo" type="text" class="validate" maxlength="18">
			  <label for="codigo">Código</label>
			</div>
			</div>
			</form>
		  </div>
		 
			 <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
			    <i class="mdi-content-send right"></i>
	  		</button>
		
	  </div>
</main>