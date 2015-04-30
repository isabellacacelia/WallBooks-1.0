<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Licença do Material';
</script>

<main>
	<div class="container"> 
	<br/>
	 <div class="row">
		<form class="col s12">
		
		  <div class="row">
			<div class="input-field col s12">
			  <input placeholder="Escolha a data da compra" id="compra" type="date" class="datepicker">
			  <label for="compra">Data de Compra</label>
			</div>
			</div>
			<div class="row">
			<div class="input-field col s12">
			  <input placeholder="Escolha a data de vencimento" id="vemc" type="date" class="datepicker">
			  <label for="vemc">Data de Vencimento</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s12">
			  <input placeholder="R$ 0,00" id="valor" type="text" class="validate">
			  <label for="valor">Valor</label>
			</div>
			</div>
			</form>
		</div>	
		<button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
		    <i class="mdi-content-send right"></i>
	  	</button>
	</div>
</main>