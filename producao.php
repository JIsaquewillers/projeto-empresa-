<?php
include "conexao.php";
$sql = "SELECT 
        producao.ProducaoID,
        produtos.Nome AS Produto,
        funcionarios.Nome AS Funcionario,
        clientes.Empresa AS Cliente, 
        producao.DataProducao,
        producao.DataEntrega FROM producao INNER JOIN produtos ON producao.ProdutoID = produtos.ProdutoID
        INNER JOIN funcionarios ON producao.FuncionarioID = funcionarios.FuncionarioID 
        INNER JOIN clientes ON producao.ClienteID = clientes.ClienteID ORDER BY producao.DataProducao DESC";
        $resultado = mysqli_query($conexao, $sql);
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <nav>
                
            <ul>
                <div id="usuario">JI</div>
                <li><a href="index.php">Dashbord</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="funcionarios.php">Funcionários</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="producao.php">Produção</a></li>
            </ul>
            </nav>
       
<table>
    <tr>
        <td>ID</td>
        <td>Produto</td>
        <td>Funcionários</td>
        <td>Cliente</td>
        <td>Produção</td>
        <td>Entrega</td>
        <td>Status</td>
    </tr>
         <?php while($producao = mysqli_fetch_assoc($resultado)):?>
    <tr>
        <td> <?php echo $producao["ProducaoID"]?></td>
        <td><?php echo $producao["Produto"]?></td>
        <td><?php echo $producao["Funcionario"]?></td>
        <td><?php echo $producao["Cliente"]?></td>
        <td><?php echo $producao["DataProducao"]?></td>
        <td><?php echo $producao["DataEntrega"]?></td>
    </tr>
    <?php endwhile;?>
</table>

        </main>
        
    </body>
    </html>