<?php
// Configuração do banco de dados
$servername = "localhost"; // Host do banco de dados
$username = "root";        // Nome de usuário
$password = "";            // Senha
$dbname = "cadastrar_produtos"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo_produto = $_POST["codigo_produto"];
    $nome_produto = $_POST["nome_produto"];
    $preco_compra = $_POST["preco_compra"];
    $preco_venda = $_POST["preco_venda"];
    $fornecedor = $_POST["fornecedor"];

    // Inserir os dados na tabela
    $sql = "INSERT INTO produtos (codigo_produto, nome_produto, preco_compra, preco_venda, fornecedor)
            VALUES ('$codigo_produto', '$nome_produto', '$preco_compra', '$preco_venda', '$fornecedor')";

    if ($conn->query($sql) === TRUE) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fechar conexão
$conn->close();
?>
