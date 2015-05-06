<?php
include "conexao.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Material
 *
 * @author Projeto
 */
class Material {
    //put your code here
    private $nome, $numerp_paginas, $genero, $data_adicionado_sistema, $data_publicacao;
    private $faixa_etaria, $descricao, $idioma, $disponivel, $tipo, $capa;
    
    function __construct($nome, $numerp_paginas, $genero, $data_adicionado_sistema, $data_publicacao, $faixa_etaria, $descricao, $idioma, $disponivel, $tipo, $capa) {
        $this->nome = $nome;
        $this->numerp_paginas = $numerp_paginas;
        $this->genero = $genero;
        $this->data_adicionado_sistema = $data_adicionado_sistema;
        $this->data_publicacao = $data_publicacao;
        $this->faixa_etaria = $faixa_etaria;
        $this->descricao = $descricao;
        $this->idioma = $idioma;
        $this->disponivel = $disponivel;
        $this->tipo = $tipo;
        $this->capa = $capa;
    }
    function cadastraMaterial($obj){
         conecta();
        $query_select = "SELECT * FROM material WHERE nome = '".$obj->nome."'";
        $select = mysql_query($query_select,$conecta);
        $array = mysql_query($select);
        
        if($array["cnpj"] != null ||$array["cnpj"] != "" ){
           $query = "INSERT INTO material (nome, numerp_paginas, genero, data_adicionado_sistema, data_publicacao, faixa_etaria, descricao, idioma, disponivel, tipo, capa)VALUES ('".$nome."','". $numerp_paginas."','". $genero."','". $data_adicionado_sistema."','". $data_publicacao."','". $faixa_etaria."','". $descricao."','". $idioma."','". $disponivel."','". $tipo."','". $capa."'"; 
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
