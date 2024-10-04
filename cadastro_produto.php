<?php

$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "cadastrar_produtos"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_produto = $_POST["codigo_produto"];
    $nome_produto = $_POST["nome_produto"];
    $preco_compra = $_POST["preco_compra"];
    $preco_venda = $_POST["preco_venda"];
    $fornecedor = $_POST["fornecedor"];

    $sql = "INSERT INTO produtos (codigo_produto, nome_produto, preco_compra, preco_venda, fornecedor)
            VALUES ('$codigo_produto', '$nome_produto', '$preco_compra', '$preco_venda', '$fornecedor')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
