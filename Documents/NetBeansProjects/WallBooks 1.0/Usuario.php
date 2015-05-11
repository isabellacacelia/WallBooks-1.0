<?php
include 'conexao.php';
include 'Cookeis.php';
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
      
       $conectar = conecta();
       $query_select = "SELECT nome_usuario , codigo_usuario, ic_usuario_administrador, ic_usuario_professor  FROM USUARIO WHERE login_usuario = '".$obj->usuario."' and senha_usuario = '".$obj->senha."'";
       $select = mysql_query($query_select,$conectar);
       if(mysql_num_rows($select) == 0 || mysql_num_rows($select) == null){
           desconecta($conectar);
           return  false;
       }else{
          
        while($row = mysql_fetch_array($select)){
         // $row = mysql_fetch_assoc($select);   
         $nome = $row['nome_usuario'];   
         $ic_admin = $row['ic_usuario_administrador']; 
         $ic_professor = $row['ic_usuario_professor'];
         $id = $row['codigo_usuario'];
          CriaCookeis($nome,$ic_admin,$ic_professor,$id);
        }               
        desconecta($conectar);
           
        return  true;
           
             
        }

        
       
    }
      
    
    
    
        
}
