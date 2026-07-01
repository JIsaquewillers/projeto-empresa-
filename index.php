    <?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa67";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao) {
        die("Erro ao conectar ao banco de dados.");
    }

    mysqli_set_charset($conexao, "utf8");
    //////////////////////////////////////////////////////////////////

    $sqlProdutos = "SELECT COUNT(*) AS total FROM produtos";
    $resultProdutos = mysqli_query($conexao, $sqlProdutos);
    $totalProdutos = mysqli_fetch_assoc($resultProdutos);

    $sqlFuncionarios = "SELECT COUNT(*) AS total FROM funcionarios";
    $resultFuncionarios = mysqli_query($conexao, $sqlFuncionarios);
    $totalFuncionarios = mysqli_fetch_assoc($resultFuncionarios);

    $sqlClientes = "SELECT COUNT(*) AS total FROM clientes";
    $resultClientes = mysqli_query($conexao, $sqlClientes);
    $totalClientes = mysqli_fetch_assoc($resultClientes);

    $sqlMaiorPreco = "SELECT MAX(Preco) AS maior_preco FROM produtos";
    $resultMaiorPreco = mysqli_query($conexao, $sqlMaiorPreco);
    $maiorPreco = mysqli_fetch_assoc($resultMaiorPreco);

    $sqlMaiorSalario = "SELECT MAX(Salario) AS maior_salario FROM funcionarios";
    $resultMaiorSalario = mysqli_query($conexao, $sqlMaiorSalario);
    $maiorSalario = mysqli_fetch_assoc($resultMaiorSalario);
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
            <h1>Painel Empresarial</h1>
            <p id="resumo">Resumo geral das consultas</p>
            <div>
                <p>Produtos</p>
                <p  class="dados"><?= $totalProdutos["total"] ?></p>
            </div>
            <div>
                <p>Funcionários</p>
                <p  class="dados"><?= $totalFuncionarios["total"] ?></p>
            </div>
            <div>
                <p>Clientes</p>
                <p  class="dados"><?= $totalClientes["total"] ?></p>
            </div>
            <div>
                <p>Maior Preço</p>
                <p  class="dados"><?= $maiorPreco ["maior_preco"]?></p>
            </div>
            <div>
                <p>Maior Salário</p>
                <p  class="dados"><?= $maiorSalario["maior_salario"] ?></p>
            </div>
        </main>
        
    </body>
    </html>