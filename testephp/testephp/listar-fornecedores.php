<?php
session_start();
include_once ("conexao.php");
?>
<!DOCTYPE html >
<html lang="pt-br">
<head>
    <title>Listar Fornecedores</title>
    <div>
        <a href="http://localhost/testephp/index.php">Home</a>
    </div>
    <h1>Listar Fornecedores</h1>

</head>
<?php
     filter_input(INPUT_GET, 'pagina',FILTER_SANITIZE_NUMBER_INT);

     $pagina = (!empty($pagina_atual)) ? $pagina_atual: 1;
     $qnt_result_pg = 10;

     //Inicio da visualização
     $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

     $lista_fornec = "SELECT * FROM fornecedor LIMIT $inicio, $qnt_result_pg";
     $resultado_fornecedor=mysqli_query($conn,$lista_fornec);

     while($row_empresa = mysqli_fetch_assoc($resultado_fornecedor)) {

         echo "cod: " . $row_empresa['cod'] . "<br>";
         echo "Nome: " . $row_empresa['Nome'] . "<br>";
         echo "CPF: " . $row_empresa['CPF'] . "<br>";
         echo "Data: " . $row_empresa['Data'] . "<br>";
         echo "Telefone:" . $row_empresa['Telefone'] . "<br><hr>";


     }
//fazer o filtro por ordem
     $order = "SELECT * FROM fornecedor WHERE $row_empresa ORDER BY 'Nome','CPF','Data' ";



