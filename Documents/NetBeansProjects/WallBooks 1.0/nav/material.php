<script> 
	var topo = document.getElementById('topo');
	topo.innerHTML = 'Material';
</script>

<main >
<div class="container" >
  <br/>
	   <div class="row">
		<form class="col s12">
		  
		  <div class="row">
			
			<div class="input-field  offset-s3 col s3">
			  <input name="grupoPesquisa" type="radio" id="nome" checked />
			  <label for="nome">Nome</label>
			  <input class="radioPesq" name="grupoPesquisa" type="radio" id="codigo"  />
			  <label for="codigo">Código</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Pesquisar Material" id="name" type="text" class="validate" maxlength="80">
			</div>
			
		  </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Digite o título do livro" id="name" type="text" class="validate" maxlength="80">
			  <label for="name">Título</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Romance, Ficção, Literatura, etc" id="genero" type="text" class="validate" maxlength="18">
			  <label for="genero">Genero</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Digite o nome do autor" id="autor" type="text" class="validate" maxlength="80">
			  <label for="autor">Autor</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Livro, Revista, História em Quadrinho, Gibi, etc" id="tipo" type="text" class="validate" maxlength="18">
			  <label for="tipo">Tipo</label>
			</div>
		    </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Português, Inglês, Espanhol, etc" id="idioma" type="text" class="validate" maxlength="80">
			  <label for="idioma">Idioma</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Digite a quantidade de páginas" id="paginas" type="text" class="validate" maxlength="18">
			  <label for="paginas">Número de Páginas</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s6">
			  <input placeholder="Digite a data da publicação" id="data" type="text" class="validate" maxlength="80">
			  <label for="data">Data da Publicação</label>
			</div>
			<div class="input-field col s6">
			  <input placeholder="Digite a faixa etária recomendada" id="idade" type="text" class="validate" maxlength="18">
			  <label for="cnpj">Faixa Etária</label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="input-field col s12">
              <textarea placeholder="Sinopse" id="textarea1" class="materialize-textarea" length="170" maxlength="171"></textarea>
              <label for="textarea1">Descrição</label>
            </div>
		  </div>
		  
		  <div class="row">
		  <div class="file-field input-field">
			  
			  <div class="btn col s3">
				<span>ESCOLHER CAPA</span>
				<input type="file" />
			  </div>
			  <input class="file-path validate offset-s3 col s9" type="text"/>
		  </div>
		  </div>
				
			<div class="row">
				<div class="col s3 offset-s9">
			<button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
			    <i class="mdi-content-send right"></i>
	  		</button>
			</div>
			</div>
		</form>
	  </div>
	  <br/>
	</div>
</main>