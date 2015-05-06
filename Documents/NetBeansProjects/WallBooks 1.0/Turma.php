<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Turma
 *
 * @author Projeto
 */
class Turma {
    //put your code here
    private $nome;
    private $professor;
    private $alunos;
    function __construct($nome, $professor, $alunos) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->alunos = $alunos;
    }

    function getNome() {
        return $this->nome;
    }

    function getProfessor() {
        return $this->professor;
    }

    function getAlunos() {
        return $this->alunos;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setProfessor($professor) {
        $this->professor = $professor;
    }

    function setAlunos($alunos) {
        $this->alunos = $alunos;
    }

     function cadastraEditora($obj){
         conecta();
        $query_select = "SELECT * FROM turma WHERE nome = '".$obj->nome."'";
        $select = mysql_query($query_select,$conecta);
        $array = mysql_query($select);
        
        if($array["cnpj"] != null ||$array["cnpj"] != "" ){
           $query = "INSERT INTO turma (nome)VALUES ('".$obj->nome."'"; 
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
