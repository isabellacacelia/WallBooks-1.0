<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Editora
 *
 * @author Projeto
 */
class Editora {
    //put your code here
    private $nome;
    private $cnpj;
    private $disponivel;
    function __construct($nome, $cnpj, $disponivel) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->disponivel = $disponivel;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getDisponivel() {
        return $this->disponivel;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }
    function cadastraEditora($obj){
         conecta();
        $query_select = "SELECT * FROM editora WHERE cnpj = '".$obj->cnpj."' and nome = '".$obj->nome."'";
        $select = mysql_query($query_select,$conecta);
        $array = mysql_query($select);
        
        if($array["cnpj"] != null ||$array["cnpj"] != "" ){
           $query = "INSERT INTO editora (nome,cnpj, disponivel)VALUES ('".$obj->nome."','".$obj->cnpj."','".$obj->disponivel."'"; 
           $insert = mysql_query($query,$conecta); 
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
