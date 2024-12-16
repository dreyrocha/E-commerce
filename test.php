<?php
include_once '../conexao.php'; // Inclui o arquivo de conexão com o banco de dados

// Verifica se a conexão foi estabelecida corretamente
if (!$mysqli) {
    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
}

echo "Conexão bem-sucedida!";

// Consulta SQL para buscar os produtos
$sql = "SELECT * FROM produtos";
$query = mysqli_query($mysqli, $sql);

// Verifica se a consulta foi bem-sucedida
if (!$query) {
    die('Erro na consulta ao banco de dados: ' . mysqli_error($mysql));
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }
        .product-card h3 {
            font-size: 20px;
            margin: 10px 0;
        }
        .product-card p {
            font-size: 14px;
            color: #555;
        }
        .product-card .price {
            font-size: 18px;
            color: #007b00;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <div class="container">
        <?php
        // Loop para exibir os dados em forma de caixas
        while ($res = mysqli_fetch_assoc($query)) {
            echo '<div class="product-card">';
            echo '<img src="../img/celular.jpg" alt="Imagem do Produto">'; // Substituir pelo caminho real da imagem
            echo '<h3>' . $res['nome'] . '</h3>'; // Nome do produto
            echo '<p>' . $res['descricao'] . '</p>'; // Descrição do produto
            echo '<p class="price">R$ ' . number_format($res['preco'], 2, ',', '.') . '</p>'; // Preço do produto
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
