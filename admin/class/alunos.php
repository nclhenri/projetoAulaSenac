<?php
require_once('conexao.php');

class AlunosClass
{
    public $idAluno;
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;

    public function Inserir()
    {
        $sql = "INSERT INTO tblalunos(nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) VALUES ('" . $this->nomeAluno . "','" . $this->dataNascAluno . "','" . $this->emailAluno . "','" . $this->senhaAluno . "','" . $this->dataCadAluno . "','" . $this->statusAluno . "','" . $this->fotoAluno . "')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }
    public function ListarAlunos()
    {
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY idAluno ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar()
    {
        $sql = "INSERT INTO tblalunos(nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) VALUES ('" . $this->nomeAluno . "','" . $this->dataNascAluno . "','" . $this->emailAluno . "','" . $this->senhaAluno . "','" . $this->dataCadAluno . "','" . $this->statusAluno . "','" . $this->fotoAluno . "')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo "<script>document.location='index.php?p=alunos'</script>";
    }

    public function Desativar()
    {
        $sql = "UPDATE tblalunos SET statusAluno = 'DESATIVADO' WHERE idAluno = $this->idAluno";
        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
        echo "<script> document.location = 'index.php?p=alunos'; </script>";
    }

    //Verificar Login
    public function verificarLogin()
    {

        $sql = "SELECT * FROM tblalunos WHERE emailAluno = '".$this->emailAluno."' AND senhaAluno = '".$this->senhaAluno."' ";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $aluno = $resultado->fetch();
        
        if ($aluno) {
            return $aluno['idAluno'];
        } else {
            return false;
        }
        
    }
}

if (isset($_POST['email'])) {

    $aluno = new AlunosClass();

    $emailLogin = $_POST['email'];
    $senhaLogin = $_POST['password'];

    $aluno->emailAluno = $emailLogin;
    $aluno->senhaAluno = $senhaLogin;

    if ($idAluno = $aluno->verificarLogin()) {
        //Login Sucesso
        session_start();
        $_SESSION['idAluno'] = $idAluno;
        echo json_encode(['success' => true, 'message' => 'Login foi realizado com sucesso!', 'idAluno' => $idAluno]);
    } else {
        //Login inválido
        echo json_encode(['success' => false, 'message' => 'E-mail ou senha inválidos!']);
    }
}
