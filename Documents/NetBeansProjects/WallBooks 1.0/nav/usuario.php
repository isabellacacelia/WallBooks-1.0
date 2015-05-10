<script>
    var topo = document.getElementById('topo');
    topo.innerHTML = 'Usuário';
</script>

<main>
     <form class="col s12" action='cadastra.php' method='POST'>
        <div class="container"> 
        <br/>
        <div class="row">
           
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Nome do Usuário" name='nome' id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Digite o login" id="nome" name='login' type="text" class="validate">
                        <label for="login">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Digite o CPF" id="nome" name='cpf' type="text" class="validate">
                        <label for="nome">CPF</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Registro Acadêmico" id="ra" name='ra' type="text" class="validate">
                        <label for="ra">RA</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Digite a senha padrão" id="senha" name='senha' type="password" class="validate">
                        <label for="senha">Senha</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="date" class="datepicker" name='data'  placeholder="Escolha a data de nascimento" id="nascimento">
                        <label for="nascimento">Data de Nascimento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Digite o e-mail" name='email' id="email" type="email" class="validate">
                        <label for="email">E-mail</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Rua Bolinha" name='rua' id="endereco" type="text" class="validate">
                        <label for="endereco">Rua</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="0000" id="email"  name='numero' type="text" class="validate">
                        <label for="endereco">Número</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Bairro Amarela" name ='bairro' id="endereco" type="text" class="validate">
                        <label for="endereco">Bairro</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="São Paulo" id="email" name='cidade' type="text" class="validate">
                        <label for="email">Cidade</label>
                    </div>
                    <div class="input-field col s6">
                        <select class="browser-default" name='estado'>
                            <option value="" disabled selected>Estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <label >Gênero</label>
                        <div class="input-field alunoGenero" >
                            <input name="genero" type="radio" id="fem" />
                            <label for="fem">Feminino</label>&nbsp;
                            <input class="radioPesq" name="genero" type="radio" id="masc" />
                            <label for="masc">Masculino</label>
                        </div>
                    </div>
                    <div class="col s6">
                        <label >Permissão</label>
                        <div class="input-field alunoGenero">
                            <input name="permissao" value='aluno' type="radio" id="aluno" />
                            <label for="aluno">Aluno</label><br/>
                            <input class="radioPesq" value='professor' name="permissao" type="radio" id="professor" />
                            <label for="professor">Professor</label><br/>
                            <input class="radioPesq" name="permissao" value ='administrador' type="radio" id="adm" />
                            <label for="adm">Administrador</label>
                        </div>
                    </div>
                </div>
            
        </div>	
        <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
            <i class="mdi-content-send right"></i>
        </button>
    </div>
    </form>
</main>