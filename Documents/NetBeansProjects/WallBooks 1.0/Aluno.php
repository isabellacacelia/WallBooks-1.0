<?php
require_once("Usuario.php");


class Aluno extends Usuario{

    private $nome, $ra , $email, $dt_nascimento;
    private $endereco, $genero, $id_instituicao, $login,$senha ;
    
    function __construct($nome, $ra, $email, $dt_nascimento, $endereco, $genero, $id_instituicao, $login, $senha) {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->email = $email;
        $this->dt_nascimento = $dt_nascimento;
        $this->endereco = $endereco;
        $this->genero = $genero;
        $this->id_instituicao = $id_instituicao;
         $this->login = $login;
        $this->senha = $senha;
        
    }
     function cadastraAluno($obj){
        $conecta = conecta();
        $query_select = "SELECT * FROM USUARIO "
                . "WHERE ra_aluno ='".$obj->ra."' OR login_usuario ='".$obj->login.
                "' OR email_usuario ='".$obj->email."'";
        $select_res = mysql_query($query_select,$conecta) or die(mysql_error());;
        //$array = mysql_query($select);
        
        if(mysql_num_rows($select_res) == 0 || mysql_num_rows($select_res) == null){
          $query = "INSERT INTO USUARIO (ic_usuario_aluno ,nome_usuario, email_usuario, "
                  . "login_usuario, senha_usuario, data_nascimento_usuario, "
                  . "sexo_usuario, endereco_usuario, ra_aluno)"
                  . "VALUES ('true', '".$obj->nome."', '".$obj->email."', '"
                  .$obj->login."', '".$obj->senha."', '".$obj->dt_nascimento."', '"
                  .$obj->genero."', '".$obj->endereco."', '".$obj->ra."')";
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
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          