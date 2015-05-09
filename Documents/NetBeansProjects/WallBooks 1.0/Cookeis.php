<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 function VerificaCookeis(){
    
    if(!isset($_COOKIE['logado']) || $_COOKIE['logado'] == false){
        
        echo "<script>alert('É necessário efetuar o login');"
        . "window.location='index.php';</script>";
   }
 
}


function CriaCookeis($nome,$ic_admin,$ic_professor,$id){
     
    setcookie('logado', true, time() + (86400 * 30), "/");
    setcookie('adm', $ic_admin , time() + (86400 * 30), "/");
    setcookie('professor',$ic_professor , time() + (86400 * 30), "/");
    setcookie("id", $id, time() + (86400 * 30), "/");
    setcookie("nome", $nome, time() + (86400 * 30), "/");
   // desconecta($conecta); 
}
function DestroiCookeis(){
    
    setcookie("id", "", time() - (86400 * 60),"/");
    setcookie("nome", "", time() - (86400 * 60),"/");
    setcookie("logado", false, time() - (86400 * 60),"/");
    setcookie('adm', "", time() - (86400 * 30), "/");
    setcookie('professor',"" , time() - (86400 * 30), "/");
   
}
?>