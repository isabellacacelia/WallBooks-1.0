<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Instituição';
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
			  <input placeholder="Digite o nome da instituição" id="name" type="text" class="validate" maxlength="80">
			  <label for="name">Nome</label>
			</div>
			</div>
			</form>
		  </div>
		 
			 <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
			    <i class="mdi-content-send right"></i>
	  		</button>
		
	  </div>
</main>