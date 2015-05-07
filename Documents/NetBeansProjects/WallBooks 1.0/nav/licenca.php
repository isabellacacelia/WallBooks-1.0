<script>
    var topo = document.getElementById('topo');
    topo.innerHTML = 'Licença';
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
                    <div class="input-field col s6">
                        <input placeholder="R$ 0,00" id="valor" type="text" class="validate">
                        <label for="valor">Valor</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Digite a quantidade de lincença" id="licenca" type="text" class="validate" maxlength="80">
                        <label for="licenca">Licença</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <label for="valor">Licença ativa?</label><br/>
                        <p>
                            <input type="checkbox" id="ativada" />
                            <label for="ativada">Sim</label>
                        </p>
                    </div>
                    <div class="input-field col s12">
                        <label>Instituições</label><br/><br/>
                        <select class="browser-default">
                            <option value="" disabled selected>Escolha uma instituiçao</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>	
        <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
            <i class="mdi-content-send right"></i>
        </button>
    </div>
</main>