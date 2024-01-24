<?php 
require_once('class/alunos.php');

$id = $_GET['id'];

$aluno = new AlunosClass();
$aluno-> idAluno = $id;
$aluno->Desativar();

?>