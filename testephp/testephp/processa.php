<?php
session_start();
include_once ("conexao.php");

$UF = filter_input(INPUT_POST,'UF',FILTER_SANITIZE_STRING);
$NomeFantasia = filter_input(INPUT_POST,'NomeFantasia',FILTER_SANITIZE_STRING);
$CNPJ = filter_input(INPUT_POST,'CNPJ',FILTER_SANITIZE_NUMBER_INT);

//echo "UF: $UF <br>";
//echo "NomeFantasia: $NomeFantasia <br>";
//echo "CNPJ: $CNPJ <br>";

$result_empresa ="INSERT INTO empresa (uf, `nome fantasia`, cnpj) VALUES ('$UF','$NomeFantasia','$CNPJ')";
$resultado_final=mysqli_query($conn,$result_empresa);

if($resultado_final) {
    $_SESSION['msg'] = "<p style='color:green;'>Empresa Cadastrada!!</p>";
    header("Location:index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Empresa Nao Cadastrada!!</p>";
    header("Location:fornecedor.php");
}