<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function VerificaCookeis(){
    
    if($_COOKIE('logado')!= true ){
        
        return "<script>alert('É necessário efetuar o login');window.location='index.php';</script>";
    }else{
        return ""; 
    }
    
}
function CriaCookeis($array){
    
    
    
    setcookie('logado', true, time() + (86400 * 30), "/");
    setcookie("id", $array['id'], time() + (86400 * 30), "/");
    setcookie("nome", $array['nome'], time() + (86400 * 30), "/");
    
}

function DestroiCookeis(){
    
    setcookie("id", "", time() - 3600);
    setcookie("nome", "", time() - 3600);
    setcookie("logado", "", time() - 3600);
    
}
?>