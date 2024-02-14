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

    public function verificarLogin()
    {

        $sql = "SELECT * FROM tblfuncionarios WHERE emailFuncionario = '".$this->emailFuncionario."' AND senhaFuncionario = '".$this->senhaFuncionario."' ";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $funcionario = $resultado->fetch();
        
        if ($funcionario) {
            return $funcionario['idFuncionario'];
        } else {
            return false;
        }
        
    }
}

if (isset($_POST['email'])) {

    $funcionario = new InstrutoresClass();

    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['password'];

    $funcionario->emailFuncionario = $emailLogin;
    $funcionario->senhaFuncionario = $senhaLogin;

    if ($idFuncionario = $funcionario->verificarLogin()) {
        //Login Sucesso
        session_start();
        $_SESSION['idFuncionario'] = $idFuncionario;
        echo json_encode(['success' => true, 'message' => 'Login foi realizado com sucesso!', 'idAluno' => $idFuncionario]);
    } else {
        //Login inválido
        echo json_encode(['success' => false, 'message' => 'E-mail ou senha inválidos!']);
    }
}

?>