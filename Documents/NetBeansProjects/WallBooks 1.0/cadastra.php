<?php
require_once('Professor.php');
require_once('Aluno.php');
require_once('Administrador.php');

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$ra = $_POST['ra'];
$email = $_POST['email'];
$endereco = strtoupper($_POST['rua']."; ".$_POST['numero']."; ".$_POST['bairro']."; ".$_POST['cidade']."; ".$_POST['estado']);
$data = $_POST['data'];
$genero = $_POST['genero'];
$permissao = $_POST['permissao'];
$usuarioNew;

if($permissao == 'administrador'){
    $usuarioNew= new Administrador($nome,$cpf,$email, $data,$endereco,$genero,$login,$senha);
   $resp = $usuarioNew->cadastraAdmin($usuario);
}else if($permissao == 'aluno'){
    $usuarioNew= new Aluno($nome,$ra,$email, $data,$endereco,$genero,1,$login,$senha);
   $resp = $usuarioNew->cadastraAluno($usuarioNew);
    
}else{
    
    $$usuarioNew= new Professor($nome,$cpf,$email, $data,$endereco,$genero,1,$login,$senha);
   $resp = $$usuarioNew->cadastraProfessor($$usuarioNew);
}
   if($resp == true){ 
    echo "<script>alert('Cadastro efetuado com sucesso!');"
       . "window.location='areaAdmin.php?pagina=nav/usuario';</script>";
    }elseif($resp == false){
        echo "<script>alert('Cadastro NÂO efetuado, CPF ou Email, já foram cadastrados');"
       . "window.location='areaAdmin.php?pagina=nav/usuario';</script>";
    }
    ?>
