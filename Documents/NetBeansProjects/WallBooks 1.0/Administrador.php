<?php
require_once("Usuario.php");


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrador
 *
 * @author Projeto
 */
class Administrador extends Usuario {
    //put your code here
      private $nome, $cpf , $email, $dt_nascimento;
    private $endereco , $genero ,$login, $senha;
    function __construct($nome, $cpf, $email, $dt_nascimento, $endereco, $genero, $login, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dt_nascimento = $dt_nascimento;
        $this->endereco = $endereco;
        $this->login = $login;
        $this->senha = $senha;
        $this->genero = $genero;
    }
     function cadastraAdmin($obj){
       $conecta = conecta();
          $query_select = "SELECT * FROM usuario WHERE cpf_usuario = '".$obj->cpf."' or email_usuario = '".$obj->email."' or login_usuario='".$obj->login."'";
        $select = mysql_query($query_select,$conecta)or die(mysql_error());
       // $array = mysql_query($select);
        
        if(mysql_num_rows($select) == 0 || mysql_num_rows($select) == null){
           $query ="INSERT INTO USUARIO (ic_usuario_administrador ,nome_usuario,"
                   . " email_usuario, login_usuario,senha_usuario,data_nascimento_usuario,"
                   . " sexo_usuario, endereco_usuario, cpf_usuario)"
                   . "VALUES ('true', '".$obj->nome."','"
                   .$obj->email."','".$obj->login."','".$obj->senha."' , '".$obj->dt_nascimento."','"
                   .$obj->genero."','".$obj->endereco."','".$obj->cpf."')"; 
           $insert = mysql_query($query,$conecta) or die(mysql_error()); 
           if($insert){
           return true;
           }else{
           return false;  
           }
        }else{
           return false;
        }
        
        
    }

}
