<script>
    var topo = document.getElementById('topo');
    topo.innerHTML = 'Professor';
</script>

<main>
    <div class="container"> 
        <br/>
        <div class="row">
            <form class="col s12" action="cadastraProfessor.php" method="POST">

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nome do Professor" id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Digite o CPF" id="cpf" type="text" class="validate">
                        <label for="cpf">CPF</label>
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
                        <input placeholder="Rua Bolinha" id="endereco" type="text" class="validate">
                        <label for="endereco">Rua</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="0000" id="email" type="email" class="validate">
                        <label for="email">Número</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Bairro Amarela"" id="endereco" type="text" class="validate">
                        <label for="endereco">Bairro</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="São Paulo" id="email" type="email" class="validate">
                        <label for="email">Cidade</label>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default">
                            <option value="" disabled selected>Estado</option>
                            <option value="1">Acre</option>
                            <option value="2">Alagoas</option>
                            <option value="3">Amapá</option>
                            <option value="3">Amazonas</option>
                            <option value="3">Bahia</option>
                            <option value="3">Ceará</option>
                            <option value="3">Distrito Federal</option>
                            <option value="3">Espírito Santo</option>
                            <option value="3">Goiás</option>
                            <option value="3">Maranhão</option>
                            <option value="3">Mato Grosso</option>
                            <option value="3">Mato Grosso do Sul</option>
                            <option value="3">Minas Gerais</option>
                            <option value="3">Pará</option>
                            <option value="3">Paraíba</option>
                            <option value="3">Paraná</option>
                            <option value="3">Pernambuco</option>
                            <option value="3">Piauí</option>
                            <option value="3">Rio de Janeiro</option>
                            <option value="3">Rio Grande do Norte</option>
                            <option value="3">Rio Grande do Sul</option>
                            <option value="3">Rondônia</option>
                            <option value="3">Roraima</option>
                            <option value="3">Santa Catarina</option>
                            <option value="3">São Paulo</option>
                            <option value="3">Sergipe</option>
                            <option value="3">Tocantins</option>
                        </select>
                    </div>
                </div>

                <div class="row valign-wrapper">
                    <div class="col s6">
                        <label >Gênero</label>
                        <div class="input-field alunoGenero">
                            <input name="grupoGenero" type="radio" id="fem" />
                            <label for="fem">Feminino</label>
                            <input class="radioPesq" name="grupoGenero" type="radio" id="masc" />
                            <label for="masc">Masculino</label>
                        </div>
                    </div>
                    <div class="col s6 center-align"> 
                        <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
            </form>	
        </div>
    </div>
</main>