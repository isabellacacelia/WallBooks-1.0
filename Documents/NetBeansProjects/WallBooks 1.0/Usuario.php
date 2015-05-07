<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Projeto
 */

class Usuario {
    //put your code here
   private $usuario = "";
   private $senha = "";
   
   function __construct($usuario, $senha) {
       $this->usuario = $usuario;
       $this->senha = $senha;
   }

    function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }
    
    
    function verificaLogin($obj){
       conecta();
       $query_select = "SELECT nome , id_usuario  FROM usuario WHERE email = '".$obj->usuario."' and senha = '".$obj->senha."'";
       $select = mysql_query($query_select,$conecta);
       $array = mysql_fetch_array($select);
        if($array['nome'] != null || $array['nome'] != "" ){
            
        return  $array;
         
        }else{
            
        return  false;
         
        }
    
       }
}
