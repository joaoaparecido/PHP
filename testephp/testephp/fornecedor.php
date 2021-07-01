<?php
include_once("conexao.php");
?>

<!DOCTYPE html >
<html lang="pt-br">
    <head>
        <title>Cadastro de Fornecedor</title>
    </head>
    <body>

    <h1>Cadastro de fornecedores</h1>

    <form method="post" action = "processafornec.php">
        <label>Codigo Empresa</label>
        <input type="number" name="cod" placeholder="ID da empresa"><br><br>

        <label>Nome:</label>
        <input type="text" name="Nome" placeholder="Insira Nome "><br><br>

        <label>CPF/CNPJ:</label>
        <input type="text" name="CPF" placeholder=""><br><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" placeholder="Insira telefone"><br><br>

        <input type="submit" value="Cadastrar">
    </form>
    </body>


</html>






