<?php
include "conexao.php";

$id = 0;

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
}

$sql = "SELECT
            produtos.ProdutoID,
            produtos.Nome AS Produto,
            produtos.Preco,
            produtos.Referencia,
            produtos.Descricao,
            produtos.Peso,
            categorias.Nome AS Categoria
        FROM produtos
        INNER JOIN categorias
            ON produtos.CategoriaID = categorias.CategoriaID
        WHERE produtos.ProdutoID = '$id'";

$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_assoc($resultado);
?>



 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css?v=1">
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


            <div id="card">
                <div id="img"></div>
        
        <h1><?php echo $produto["Produto"] ?></h1>
        <span>Categoria:<?php echo $produto["Categoria"] ?></span>
            <p>Referência:<?php echo $produto["Referencia"] ?></p>
            <p>Peso:<?php echo $produto["Peso"] ?>KG</p>
            <p>Preco: R$<?php echo $produto["Preco"] ?></p>
            <p><?php echo $produto["Descricao"] ?></p>
            <a href="produtos.php">Retornar</a>
    </div>
        </main>
        
    </body>
    </html>
    




