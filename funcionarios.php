<?php
 include  "conexao.php";

    $sql = "SELECT
         funcionarios.Nome AS funcionario,
         funcionarios.Email,
         funcionarios.Ramal,
         funcionarios.Salario,   
         cargos.Nome AS cargo,
         setor.Nome AS Setor
         FROM funcionarios
         INNER JOIN cargos
         ON funcionarios.cargoID = cargos.CargoID
         INNER JOIN setor
         ON funcionarios.SetorID = setor.SetorID
         ORDER BY funcionarios.Nome ASC";

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
            <h1>Funcionários</h1>
            <div id="tabela">
            <table>
                <tr>
                    <td class="azul">Nome</td>
                    <td class="azul">Email</td>
                    <td class="azul">Ramal</td>
                    <td class="azul">Cargo</td>
                    <td class="azul">Setor</td>
                    <td class="azul">Salário</td>
                </tr>
                 <?php while ($funcionario = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo ($funcionario["funcionario"]); ?></td>
                    <td><?php echo ($funcionario["Email"]); ?></td>
                    <td><?php echo ($funcionario["Ramal"]); ?></td>
                    <td><?php echo ($funcionario["cargo"]); ?></td>
                    <td><?php echo ($funcionario["Setor"]); ?></td>
                    <td>R$ <?php echo number_format($funcionario["Salario"], 2, ',', '.'); ?></td>
                </tr>
                <?php endwhile; ?>
            </table>
            </div>
        </main>
        
    </body>
    </html>