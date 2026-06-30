<?php
include "conexao.php";

// Total de produtos
$sqlProdutos = "SELECT COUNT(*) AS total FROM produtos";
$resultProdutos = mysqli_query($conexao, $sqlProdutos);
$totalProdutos = mysqli_fetch_assoc($resultProdutos);

// Total de funcionários
$sqlFuncionarios = "SELECT COUNT(*) AS total FROM funcionarios";
$resultFuncionarios = mysqli_query($conexao, $sqlFuncionarios);
$totalFuncionarios = mysqli_fetch_assoc($resultFuncionarios);

// Total de clientes
$sqlClientes = "SELECT COUNT(*) AS total FROM clientes";
$resultClientes = mysqli_query($conexao, $sqlClientes);
$totalClientes = mysqli_fetch_assoc($resultClientes);

// Maior preço
$sqlMaiorPreco = "SELECT MAX(Preco) AS maior_preco FROM produtos";
$resultMaiorPreco = mysqli_query($conexao, $sqlMaiorPreco);
$maiorPreco = mysqli_fetch_assoc($resultMaiorPreco);

// Maior salário
$sqlMaiorSalario = "SELECT MAX(Salario) AS maior_salario FROM funcionarios";
$resultMaiorSalario = mysqli_query($conexao, $sqlMaiorSalario);
$maiorSalario = mysqli_fetch_assoc($resultMaiorSalario);
?>