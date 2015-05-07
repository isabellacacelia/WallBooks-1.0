<?php
include "Usuario.php";
include "conexao.php";

$login = $_POST['email'];
$senha = $_POST['password'];

$usuario = new Usuario($login,$senha);

 $result = $usuario->verificaLogin($usuario);
if($result!=false){
    CriaCookeis($result);
    return "<script>window.location='areaAdmin.php?pagina=nav/inicio';</script>";
}else{
    
    return "<script>alert('Usuario e/ou Senha incorretos!');</script>";
}

?>