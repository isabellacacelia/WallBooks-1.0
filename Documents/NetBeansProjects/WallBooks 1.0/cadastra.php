<?php
include 'Professor.php';
include 'Aluno.php';
include 'Administrador.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$ra = $_POST['ra'];
$endereco = strtoupper($_POST['rua']."; ".$_POST['numero']."; ".$_POST['bairro']."; ".$_POST['cidade']."; ".$_POST['estado']);
$data = $_POST['data'];
$genero = $_POST['genero'];
$permissao = $_POST['permissao'];

if($permissao == 'administrador'){
    $usuario= new Administrador($nome,$cpf,$email, $data,$endereco,$genero,$login,$senha);
   $resp = $usuario->cadastraAdmin($usuario);
}else if($permissao == 'aluno'){
    $usuario= new Aluno($nome,$ra,$email, $data,$endereco,$genero,1/*numero instiruição*/,$login,$senha);
   $resp = $usuario->cadastraAluno($usuario);
    
}else{
    
    $usuario= new Professor($nome,$cpf,$email, $data,$endereco,$genero,1/*numero instiruição*/,$login,$senha);
   $resp = $usuario->cadastraProfessor($usuario);
}
   if($resp == true){ 
    echo "<script>alert('Cadastro efetuado com sucesso!');"
       . "window.location='areaAdmin.php?pagina=nav/usuario';</script>";
    }else{
        echo "<script>alert('Cadastro NÂO efetuado, CPF ou Email, já foram cadastrados');"
       . "window.location='areaAdmin.php?pagina=nav/usuario';</script>";
    }
    ?>
