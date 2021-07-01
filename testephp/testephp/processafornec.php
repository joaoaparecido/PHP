<?php
session_start();
include_once ("conexao.php");

$cod = filter_input(INPUT_POST,'cod',FILTER_SANITIZE_NUMBER_INT);
$Nome = filter_input(INPUT_POST,'Nome',FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST,'CPF',FILTER_SANITIZE_STRING);
$Telefone = filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_STRING);
$Data = (date('Y-m-d H:i:s'));



$result_forn = "INSERT INTO fornecedor (cod, Nome, CPF, Data, Telefone) VALUES ('$cod' , '$Nome', '$CPF','$Data','$Telefone')";
$forn_final = mysqli_query($conn, $result_forn);

if ($forn_final ){
    $_SESSION['msg'] = "<p style='color:green;'> Fornecedor Cadastrado!!</p>";
    header("location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Fornecedor Invalido </p>";
    header("location: listar.php");
}





