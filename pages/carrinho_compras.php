<?php
session_start(); 

if (isset($_SESSION['email'])) {
    $mensagemBoasVindas = "Bem-vindo(a), " . htmlspecialchars($_SESSION['email']) . ", Veja os";
} else {
  
    $mensagemBoasVindas = "Bem-vindo(a) ao nosso carrinho!";
}
?>


<?php
include_once '../conexao.php'; 
if (!$mysqli) {
    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
}

// echo "Conexão bem-sucedida!";


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
<link rel="stylesheet" href="../css/header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwitcher+Grypen:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Produtos</title>
    <style>
        body {
            font-family:  "poppins", Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
      header {
        display: flex;
        heigt:100%; !important;
        justify-content:space-between;
        padding:40px 300px
      }
        #logo img {
        width: 200px !important;
        height: auto !important;
       
    }

        h1 {
            margin-top: 100px;
        }
        .container {
            margin-top: 30px;
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
            height: 400px;
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
        <header>
            <div>
            <a id="logo" href="../buscalogado.php">
                    <img src="../img/Logo.png" alt=""></i>
                </a>
            </div>
            <div>
            <a id="exit" href="../index.php"><i class="bi bi-box-arrow-right"></i> Sair</a>
            </div>
        </header>
    <section class="interface2">
    <h1>
    <?php echo $mensagemBoasVindas  ?>  
    produtos disponíveis</h1>
    <div class="container">
        <?php
     
        while ($res = mysqli_fetch_assoc($query)) {
            echo '<div class="product-card">';
            echo '<img src="' . $res['imagem'] . '" alt="Imagem do Produto">'; // imagem
            echo '<h3>' . $res['nome'] . '</h3>'; // Nome
            echo '<p>' . $res['descricao'] . '</p>'; 
            echo '<p class="price">R$ ' . number_format($res['preco'], 2, ',', '.') . '</p>'; 
            echo '</div>';
        }
        ?>
    </div>
    </section>
</body>
</html>
