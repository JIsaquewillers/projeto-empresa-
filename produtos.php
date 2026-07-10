 <?php
 include "conexao.php";
 $busca = "";
 if(isset($_GET["busca"])){
    $busca = $_GET["busca"];
 }
 $sql = "SELECT
        produtos.ProdutoID,
        produtos.Nome AS Produto,
        produtos.Preco,
        produtos.Referencia,
        produtos.Peso,
        categorias.Nome AS Categoria
        FROM Produtos
        INNER JOIN categorias ON produtos.CategoriaID = categorias.CategoriaID
        WHERE produtos.Nome LIKE '%$busca%'
        ORDER BY produtos.Nome ASC";
 $resultado = mysqli_query($conexao, $sql);
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
            <h1 class="titulo">Produtos</h1>
            <?php while($produto = mysqli_fetch_assoc($resultado)) { ?>
            <div class="quadrado">
                <h1 class="azul2"><?php echo $produto["Produto"]?></h1>
                <span ><?php echo $produto["Categoria"]?></span>
                <span>R$<?php echo  $produto["Preco"]?></span>
                <a class="verMais" href="verMais.php?id=<?php echo $produto["ProdutoID"]; ?>">
    Ver mais
</a>
            </div>
            <?php } ?>
        </main>
        
    </body>
    </html>