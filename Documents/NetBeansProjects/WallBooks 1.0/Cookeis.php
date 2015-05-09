<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 function VerificaCookeis(){
    
    if($_COOKIE['logado'] != true ){
        
        echo "<script>alert('É necessário efetuar o login');"
        . "window.location='index.php';</script>";
   }
 
}


function CriaCookeis($result){
     
    setcookie('logado', true, time() + (86400 * 30), "/");
    setcookie('adm', $result['ic_usuario_administrador'] , time() + (86400 * 30), "/");
    setcookie('professor',$result['ic_usuario_professor'] , time() + (86400 * 30), "/");
    setcookie("id", $result['codigo_usuario'], time() + (86400 * 30), "/");
    setcookie("nome", $result['nome_usuario'], time() + (86400 * 30), "/");
   // desconecta($conecta); 
}
function DestroiCookeis(){
    
    setcookie("id", "", time() - 1000000000000000000000000);
    setcookie("nome", "", time() - 1000000000000000000000000);
    setcookie("logado", "", time() - 1000000000000000000000000);
    
}
?>