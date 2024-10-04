<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"/>

</head>
<body>
    <div class="container">
    <form action="cadastro_produto.php" method="post">
        <h1 class="texto-estilizado">Cadastro de Produtos</h1>
        
        <label for="codigo_produto">Código do Produto:</label><br>
        <input type="text" id="codigo_produto" name="codigo_produto" required><br><br>
        
        <label for="nome_produto">Nome do Produto:</label><br>
        <input type="text" id="nome_produto" name="nome_produto" required><br><br>

        <label for="preco_compra">Preço de Compra:</label><br>
        <input type="text" id="preco_compra" name="preco_compra" required><br><br>

        <label for="preco_venda">Preço de Venda:</label><br>
        <input type="text" id="preco_venda" name="preco_venda" required><br><br>

        <label for="fornecedor">Nome do Fornecedor:</label><br>
        <input type="text" id="fornecedor" name="fornecedor" required><br><br>

        <button class="btn btn-primary" type="button">Button</button>
    </form>
    </div>
</body>
</html>
