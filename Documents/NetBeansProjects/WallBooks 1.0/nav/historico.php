<script>
    var topo = document.getElementById('topo');
    topo.innerHTML = 'Histórico';
</script>


<main >
    <div class="container" >
        <br/>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="pesquisar" type="text" class="validate">
                        <label for="pesquisar">Pesquisar</label>

                        <button class="btn waves-effect waves-light" type="submit" name="action">ENVIAR
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
        </div>
        <table class="bordered">
            <thead>
                <tr>
                    <th data-field="id">Código do Material</th>
                    <th data-field="name">Código do Administrador</th>
                    <th data-field="price">Data de Alteração</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>0000</td>
                    <td>B1</td>
                    <td>24/03/2015 - 22:05</td>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>B2</td>
                    <td>26/03/2015 - 22:05</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>B3</td>
                    <td>01/04/2015 - 13:12</td>
                </tr>
            </tbody>
        </table>

    </div>
</main>