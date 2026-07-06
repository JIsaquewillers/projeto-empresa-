<?php
include  "conexao.php";

$sql = "SELECT 
        ClienteID,
        Nome,
        Telefone,
        Email,
        Endereco,
        CNPJ,
        Estado,
        Cidade,
        Empresa FROM clientes 
        ORDER BY Empresa ASC";

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
            <h1  class="titulo">Clientes</h1>
<table id="tabelaClientes">
                <tr>
                    <td class="azul">ID</td>
                    <td class="azul">Empresa</td>
                    <td class="azul">Contato</td>
                    <td class="azul">E-mail</td>
                    <td class="azul">Telefone</td>
                    <td class="azul">Cidade</td>
                    <td class="azul">UF</td>
                </tr>
                <?php while( $cliente = mysqli_fetch_assoc($resultado)):?>
<tr>
     <td ><?php echo($cliente["ClienteID"]) ?></td>
    <td><?php echo($cliente["Empresa"]) ?></td>
    <td><?php echo($cliente["Nome"]) ?></td>
    <td><?php echo($cliente["Email"]) ?></td>
    <td><?php echo($cliente["Telefone"]) ?></td>
    <td><?php echo($cliente["Cidade"]) ?></td>
    <td><?php echo($cliente["Estado"]) ?></td>
   
</tr>
<?php endwhile; ?>
</table>


        </main>
        
    </body>
    </html>