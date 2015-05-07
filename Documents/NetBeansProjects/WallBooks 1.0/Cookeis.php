<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function VerificaCookeis(){
    
    if(!isset($_COOKIE('logado'))){
        
        return "<script>alert('É necessario efetuar o login');window.location='index.php';</script>";
    }else{
        return ""; 
    }
    
}

function DestroiCookeis(){
    
    setcookie("usuario", "", time() - 3600);
    setcookie("nome", "", time() - 3600);
    setcookie("logado", "", time() - 3600);
    
}
?>