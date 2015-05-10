<?php
include 'Instituicao.php';
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];

$instituicao = new Instituicao($nome,$cnpj);
$resp = $instituicao->cadastraInstituicao($instituicao);

/*if(){
    
}*/
?>