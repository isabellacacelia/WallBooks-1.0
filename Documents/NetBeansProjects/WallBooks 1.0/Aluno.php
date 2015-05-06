<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Projeto
 */
class Aluno extends Usuario {
   private $nome, $ra , $email, $dt_nascimento;
    private $rua, $numero, $bairro, $estado, $cidade, $genero, $id_instituicao;
    
    function __construct($nome, $ra, $email, $dt_nascimento, $rua, $numero, $bairro, $estado, $cidade, $genero, $id_instituicao) {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->email = $email;
        $this->dt_nascimento = $dt_nascimento;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->genero = $genero;
        $this->id_instituicao = $id_instituicao;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->ra;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getDt_nascimento() {
        return $this->dt_nascimento;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getGenero() {
        return $this->genero;
    }

    function getId_instituicao() {
        return $this->id_instituicao;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->ra = $cpf;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDt_nascimento($dt_nascimento) {
        $this->dt_nascimento = $dt_nascimento;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setId_instituicao($id_instituicao) {
        $this->id_instituicao = $id_instituicao;
    }
    
    function cadastraAluno($obj){
        conecta();
        $query_select = "SELECT * FROM usuario WHERE ra = '".$obj->ra."' and email = '".$obj->email."'";
        $select = mysql_query($query_select,$conecta);
        $array = mysql_query($select);
        
        if($array["ra"] != null ||$array["ra"] != "" ){
           $query = "INSERT INTO usuario (login,senha,data_nascimento,sexo,endereco,ra, aluno )VALUES ('".$obj->email."','".$obj->senha."' , '".$obj->dt_nascimento."','".$obj->genero."','".$obj->rua." ".$obj->numero." ".$obj->bairro." ".$obj->cidade."-".$obj->estado."','".$obj->ra."', 'true')"; 
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
