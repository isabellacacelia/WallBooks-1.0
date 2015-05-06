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
    private $numeroLicenca;
    function __construct($nome, $cnpj, $numeroLicenca) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->numeroLicenca = $numeroLicenca;
    }

    function geNumeroLicenca(){
        return $this->numeroLicenca;
        
    }
    function setNumeroLicenca($numero){
        $this->numeroLicenca = $numero;
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
        conecta();
        $query_select = "SELECT * FROM instituicao WHERE cnpj = '".$obj->cnpj."' and nome = '".$obj->nome."'";
        $select = mysql_query($query_select,$conecta);
        $array = mysql_query($select);
        
        if($array["cnpj"] != null ||$array["cnpj"] != "" ){
           $query = "INSERT INTO instituicao (nome,cnpj)VALUES ('".$obj->nome."','".$obj->cnpj."'"; 
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
