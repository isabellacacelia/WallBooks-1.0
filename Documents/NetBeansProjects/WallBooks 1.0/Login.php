<?php
include "Usuario.php";
include "conexao.php";

$login = $_POST['email'];
$senha = $_POST['password'];

$usuario = new $usuario($login,$senha);

 $result = $usuario->verificaLogin($usuario);
if($result!=false){
    CriaCookeis($result);
}else{
    
    return "<script>alert('Usuario e/ou Senha incorretos!');</script>";
}

?>