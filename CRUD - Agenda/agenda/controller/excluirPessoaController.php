<?php
require_once '../dao/pessoaDAO.php';

// RECUPERANDO ID
$id_pessoa = $_GET['id_pessoa'];

$pessoaDAO = new pessoaDAO();
$pessoaDAO->excluirPessoa($id_pessoa);

header("Location: ../view/listarAllPessoa.php");
?>