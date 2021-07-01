<?php
session_start();
include_once ("conexao.php");
?>
<!DOCTYPE html >
<html lang="pt-br">
    <head>
        <title>Listar Empresas</title>
    </head>

    <div>
        <a href="http://localhost/testephp/fornecedor.php">Incluir Fornecedor</a>
    </div>
    <div>
        <a href="http://localhost/testephp/index.php">Incluir Empresa</a>
    </div>

     <body>
     <h1>Listar Empresas</h1>
     <?php
     if(isset( $_SESSION['msg'])){
         echo $_SESSION['msg'];
     unset( $_SESSION['msg']);
}


     filter_input(INPUT_GET, 'pagina',FILTER_SANITIZE_NUMBER_INT);

     $pagina = (!empty($pagina_atual)) ? $pagina_atual: 1;
     $qnt_result_pg = 10;

     //Inicio da visualização
     $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

     $result_lista = "SELECT * FROM empresa LIMIT $inicio, $qnt_result_pg";
     $resultado_empresa=mysqli_query($conn,$result_lista);
     while($row_empresa = mysqli_fetch_assoc($resultado_empresa)){
         echo "ID: " . $row_empresa['ID'] . "<br>";
         echo "UF: " . $row_empresa['UF'] . "<br>";
         echo "Nome Fantasia: " . $row_empresa['Nome Fantasia'] . "<br>";
         echo "CNPJ: " . $row_empresa['CNPJ'] . "<br><hr>";
     }

     $result_pg = "SELECT COUNT(ID) AS num_result FROM empresa";
     $resultado_pg = mysqli_query($conn,$result_pg);
     $row_pg = mysqli_fetch_assoc($resultado_pg);

     //Se precisar saber o numero por pagina imprimir;
     //?echo $row_pg['num_result'];


     //Saber o numero de paginas
     $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
     //echo $quantidade_pg;

     $max_link = 2;
     echo "<a href = 'listar.php?pagina=1'>Primeira </a>";
     echo "<a href = 'listar.php?pagina=$quantidade_pg'>Ultima </a>";




