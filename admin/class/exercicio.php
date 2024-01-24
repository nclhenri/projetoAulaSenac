<?php

require_once('conexao.php');

class ExercicioClass
{

    public $idExercicio;
    public $nomeExercicio;
    public $descricaoExercicio;
    public $grupoMuscularExercicio;
    public $statusExercicio;
    public $fotoExercicio;
    public $linkExercicio;


    public function __construct($id = false)
    {
        if ($id) {
            $this->idExercicio = $id;
            $this->Carregar();
        }
    }

    public function Atualizar()
    {
        $sql = "UPDATE tblexercicios SET nomeExercicio = '".$this->nomeExercicio."',  descricaoExercicio = '".$this->descricaoExercicio."', '".$this->grupoMuscularExercicio."', '" .$this->statusExercicio."', '" .$this->fotoExercicio."' WHERE idExercicio =" .$this->idExercicio;
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }


    public function Inserir()
    {
        $sql = "INSERT INTO `tblexercicios`(`nomeExercicio`, 
        `descricaoExercicio`, 
        `grupoMuscularExercicio`, 
        `statusExercicio`, 
        `fotoExercicio`, 
        `linkExercicio`) 
        VALUES ('" . $this->nomeExercicio . "', '" . $this->descricaoExercicio . "', '" . $this->grupoMuscularExercicio . "', '" . $this->statusExercicio . "', '" . $this->fotoExercicio . "', '" . $this->linkExercicio . "')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }

    public function ListarExercicio()
    {
        $sql = "SELECT * FROM tblexercicios WHERE statusExercicio = 'ATIVO' ORDER BY idExercicio ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar()
    {
        $sql = "INSERT INTO `tblexercicios`(`nomeExercicio`, 
        `descricaoExercicio`, 
        `grupoMuscularExercicio`, 
        `statusExercicio`, 
        `fotoExercicio`, 
        `linkExercicio`) 
        VALUES ('" . $this->nomeExercicio . "', '" . $this->descricaoExercicio . "', '" . $this->grupoMuscularExercicio . "', '" . $this->statusExercicio . "', '" . $this->fotoExercicio . "', '" . $this->linkExercicio . "')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=exercicios'</script>";
    }

    public function Carregar()
    {
        $query = "SELECT * FROM tblexercicios WHERE idExercicio = " . $this->idExercicio;

        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        foreach ($lista as $linha) {
            $this->nomeExercicio = $linha["nomeExercicio"];
            $this->descricaoExercicio = $linha["descricaoExercicio"];
            $this->grupoMuscularExercicio = $linha["grupoMuscularExercicio"];
            $this->statusExercicio = $linha["statusExercicio"];
            $this->fotoExercicio = $linha["fotoExercicio"];
            $this->linkExercicio = $linha["linkExercicio"];
        }
    }
}
