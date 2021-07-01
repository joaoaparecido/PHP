<?php
session_start();
?>
<!DOCTYPE html >
<html lang="pt-br">
    <head>
        <title>Cadastro de Empresa</title>
    </head>
     <body>
     <h1>Cadastrar Empresa</h1>
     <?php
     if(isset( $_SESSION['msg'])){
         echo $_SESSION['msg'];
     unset( $_SESSION['msg']);
}
     ?>
     <form method="post" action = "processa.php">
         <label>UF:</label>
         <input type="text" name="UF" placeholder="Insira UF"><br><br>

         <label>NomeFantasia:</label>
         <input type="text" name="NomeFantasia" placeholder="Insira Nome Fantasia"><br><br>

         <label>CNPJ:</label>
         <input type="text" name="CNPJ" placeholder="14 digitos"><br><br>

         <input type="submit" value="Cadastrar">
     </form>
     </body>
</html>






