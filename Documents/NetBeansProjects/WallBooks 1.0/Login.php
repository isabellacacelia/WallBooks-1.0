<?php

include 'Usuario.php';
//include 'Cookeis.php'; 
$login = $_POST['email'];
$senha = $_POST['password'];

$usuario = new Usuario($login,$senha);

 $result = $usuario->verificaLogin($usuario);
if($result === false){
 echo "<script type='text/javascript'>alert('Usuario e/ou Senha incorretos!');</script>";
   echo "<script type='text/javascript'>window.location='index.php';</script>";
 }else{
   //  CriaCookeis($result);
   echo "<script type='text/javascript'>window.location='areaAdmin.php?pagina=nav/inicio';</script>";
   
 
 }
?>