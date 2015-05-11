<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Instituicao
 *
 * @author Projeto
 */
class Instituicao {
    //put your code here
    private $nome;
    private $cnpj;
   
    function __construct($nome, $cnpj) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
      
    }

   
    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }
    function cadastraInstituicao($obj){
        $conecta = conecta();
        $query_select = "SELECT * FROM instituicao WHERE cnpj = '".$obj->cnpj."'";
        $select = mysql_query($query_select,$conecta) or die(mysql_error());
        
        
        if(mysql_num_rows($select) == 0 || mysql_num_rows($select) == null){
           $query = "INSERT INTO instituicao (nome,cnpj)VALUES ('"
                   .$obj->nome."','".$obj->cnpj."'"; 
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
