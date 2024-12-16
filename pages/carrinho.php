<?php
session_start(); 

if (isset($_SESSION['email'])) {
    $mensagemBoasVindas = "Bem-vindo(a), " . htmlspecialchars($_SESSION['email']) . "!";
} else {
  
    $mensagemBoasVindas = "Bem-vindo(a) ao nosso carrinho!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwitcher+Grypen:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/herosite.css">
    <link rel="stylesheet" href="../css/car.css">


</head>

<body>
    <header id="header">
        <div class="interface">
            <div class="logo">
                <a href="../buscalogado.php">
                    <img src="../img/Logo.png" alt=""></i>
                </a>
            </div>

            <div class="buscar-box">
                <div class="lupa-buscar">
                    <i class="bi bi-search"></i>
                </div> <!--vlupa-buscar-->

                <div class="input-buscar">
                    <input type="text" id="placeholder" name="" placeholder="O que você procura?">
                </div> <!--input-buscar-->

                <div class="btn-fechar">
                    <i class="bi bi-x-circle"></i>
                </div> <!--btn-fechar-->
            </div>

            <section class="endNav">
                <nav>
                    <ul>
                    <li class="carrinhoCar">
                            <a href="#""><i class=" bi bi-cart" id="cart-icon"></i>Meu carrinho</a>
                    </li>
                    <li>
                    <a id="exit" href="../index.php"><i class="bi bi-box-arrow-right"></i> Sair</a>
                    </li>
                    </ul>
                </nav>
            </section>
            <div class="cart">
                <h2 class="cart-title">Seu carrinho<i class=" bi bi-cart"></i>
                </h2>
                <div class="car-content">

                    <div class="cart-box">
                        <img src="../img/produto1.jpg" alt="" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">Adptador</div>
                            <div class="cart-price">R$ 170.00</div>
                            <input type="number" value="1" class="cart-quantidade">
                        </div>
                        <i class="bi bi-trash3-fill cart-remove"></i>

                    </div>

                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-preco">$0</div>
                    </div>
                    <button type="button" class="btn-comprar">Comprar agora</button>
                    <i class="bi bi-x" id="close-cart"></i>
                </div>
            </div>

        </div>
    </header>
    <section class="test">
        <div class="interface2">
    

            <h4 class="section-title">
            <?php echo $mensagemBoasVindas  ?> Veja os produtos disponíveis
            </h4>
            
            <div class="shop-content">
                <!-- caixa 1 -->
                <div class="product-box">
                    <img src="../img/produto1.jpg" class="product-img" alt="">
                    <h2 class="product-title">Adaptador</h2><span class="preço">R$ 178.00<button class="add-cart" data-id="1" data-quantity="1">add<i
                        class=" bi bi-cart"></i></span></button>

                </div>
                <!-- caixa 1 -->
                <div class="product-box">
                    <img src="../img/produto1.jpg" class="product-img" alt="">
                    <h2 class="product-title">Adaptador</h2><span class="preço">R$ 178.00<button class="add-cart">add<i
                        class=" bi bi-cart"></i></span></button>

                </div>
                <!-- caixa 1 -->
                <div class="product-box">
                    <img src="../img/produto1.jpg" class="product-img" alt="">
                    <h2 class="product-title">Adaptador</h2><span class="preco">R$ 178.00<button class="add-cart">add<i
                        class=" bi bi-cart"></i></span></button>

                </div>
               
              

            </div>
    </section>
  
    <script src="../script.js"></script>
</body>

</html>