<?php 
require_once('conexao.php');

class InstrutoresClass{
    public $nomeFuncionario;
    public $dataNascFuncionario;
    public $cargoFuncionario;
    public $especialidadeFuncionario;
    public $emailFuncionario;
    public $senhaFuncionario;
    public $nivelFuncionario;
    public $telefoneFuncionario;
    public $dataAdmisFuncionario;
    public $statusFuncionario;
    public $fotoFuncionario;
    public $faceFuncionario;
    public $instaFuncionario;
    public $linkedinFuncionario;
    public $whatsFuncionario;

    public function Inserir(){
        $sql = "INSERT INTO `tblfuncionarios`(`idFuncionario`, `nomeFuncionario`, `altFuncionario`, `dataNascFuncionario`, `cargoFuncionario`, `especialidadeFuncionario`, `emailFuncionario`, `senhaFuncionario`, `nivelFuncionario`, `telefoneFuncionario`, `dataAdmissaoFuncionario`, `statusFuncionario`, `fotoFuncionario`, `linkFaceFuncionario`, `linkInstaFuncionario`, `linkLinkedinFuncionario`, `linkWhatsFuncionario`) VALUES ('".$this->nomeFuncionario."', '".$this->dataNascFuncionario."', '".$this->cargoFuncionario."', ".$this->especialidadeFuncionario."', ".$this->emailFuncionario."', ".$this->senhaFuncionario."', ".$this->nivelFuncionario."', ".$this->telefoneFuncionario."', ".$this->dataAdmisFuncionario."', ".$this->statusFuncionario."', ".$this->statusFuncionario."', ".$this->fotoFuncionario."', ".$this->faceFuncionario."', ".$this->instaFuncionario."', ".$this->linkedinFuncionario."', ".$this->whatsFuncionario."')";
    }

    public function ListarInstrutores(){
        $sql = "SELECT * FROM tblfuncionarios WHERE statusFuncionario = 'ATIVO' ORDER BY idFuncionario ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
?>