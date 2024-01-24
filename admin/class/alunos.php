<?php 
require_once('conexao.php');

class AlunosClass{
    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;

    public function Inserir(){
        $sql = "INSERT INTO tblalunos(nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) VALUES ('".$this->nomeAluno."','".$this->dataNascAluno."','".$this->emailAluno."','".$this->senhaAluno."','".$this->dataCadAluno."','".$this->statusAluno."','".$this->fotoAluno."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }
    public function ListarAlunos(){
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY idAluno ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar(){
        $sql = "INSERT INTO tblalunos(nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) VALUES ('".$this->nomeAluno."','".$this->dataNascAluno."','".$this->emailAluno."','".$this->senhaAluno."','".$this->dataCadAluno."','".$this->statusAluno."','".$this->fotoAluno."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo"<script>document.location='index.php?p=alunos'</script>";
    }

    public function Desativar(){
        $sql = "UPDATE tblalunos SET statusAluno = 'DESATIVADO' WHERE idAluno = $this->idAluno";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo "<script> document.location = 'index.php?p=alunos'; </script>";
    }
}
?>