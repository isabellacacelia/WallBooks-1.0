<?php

require_once("Usuario.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author Projeto
 */
class Professor extends Usuario {
    //put your code here
    private $nome, $cpf , $email, $dt_nascimento;
    private $endereco,$genero, $id_instituicao,$login,$senha;
    
    function __construct($nome, $cpf, $email, $dt_nascimento, $endereco, $genero, $id_instituicao,$login,$senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dt_nascimento = $dt_nascimento;
        $this->endereco = $endereco;
        $this->genero = $genero;
        $this->id_instituicao = $id_instituicao;
         $this->login = $login;
        $this->senha = $senha;
        
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
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
        $this->cpf = $cpf;
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
    function setGenero($genero) {
        $this->genero = $genero;
    }

    function setId_instituicao($id_instituicao) {
        $this->id_instituicao = $id_instituicao;
    }
    
    function cadastraProfessor($obj){
        $conecta = conecta();
        $query_select = "SELECT * FROM usuario WHERE cpf_usuario = '".$obj->cpf."' or email_usuario = '".$obj->email."' or login_usuario = '".$obj->login."'";
        $select = mysql_query($query_select,$conecta);
        //$array = mysql_query($select);
        
        if(mysql_num_rows($select) == 0 || mysql_num_rows($select) == null){
           $query = "INSERT INTO usuario (ic_usuario_professor ,nome_usuario, email_usuario, login_usuario,senha_usuario,"
                   . "data_nascimento_usuario, sexo_usuario, endereco_usuario, cpf_usuario)"
                   . "VALUES ('true', '".$obj->nome."','".$obj->email."','".$obj->login."','".$obj->senha."' , '".$obj->dt_nascimento."','"
                   .$obj->genero."','".$obj->endereco."','".$obj->cpf."')"; 
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
