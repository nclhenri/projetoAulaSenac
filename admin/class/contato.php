<?php

require_once('conexao.php');

class ContatoClass{

    public $nomeContato;
    public $emailContato;
    public $telefoneContato;
    public $mensagemContato;

    public function Inserir(){
        $sql = "INSERT INTO tblcontato (nomeContato, emailContato, telefoneContato, mensagemContato)
         VALUES ('".$this->nomeContato."', '".$this->emailContato."' , '".$this->telefoneContato."', '".$this->mensagemContato."')";

         $connect = Conexao::LigarConexao();
         $connect->exec($sql);
    }

    public function ListarContato(){

        $sql = "SELECT * FROM tblcontato WHERE statusContato = 'ATIVO' ORDER BY idContato ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }


} //FIM DA CLASS CONTATO

?>