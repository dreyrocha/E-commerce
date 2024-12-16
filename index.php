<!DOCTYPE html>
<html lang="pt-br">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Barra de busca</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/herosite.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwitcher+Grypen:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/car.css">
    <link rel="stylesheet" href="./css/contato.css">
    <link rel="stylesheet" href="./css/responsividade.css">
    <link rel="stylesheet" href="./css/stylecar.css">
    <link rel="stylesheet" href="./css/shopcontainer.css">
    <link rel="stylesheet" href="./css/rodape.css">
    <link rel="stylesheet" href="./css/vantagens.css">
  
    
</head>

<body>
    <header id="header">
        <div class="interface">
            <div class="logo">
                <a href="index.php">
                    <img src="./img/Logo.png" alt=""></i>
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
                        <li>
                            <a href="./pages/login.php"><button class="loginNAV">login</button></a>
                        </li>

                        <li class="cadastroNav">
                            <a href="./pages/cadastro.php" ">Cadastro</a>
                </li>
                <!-- <li class=" carrinhoNav">
                                <a href="./pages/carrinho.php""><i class=" bi bi-cart"></i>carrinho</a>
                        </li>
                    </ul> -->
                </nav>
            </section>
        </div>
    </header>
    <section class="hero-site">
        <div class="interface">
            <div class="txt-hero">
                <h1>Seu mundo <span>+mais inteligente</span> </h1>
                <p>Do smartwatch ao som premium: <span> escolha o que combina com você!</span></p>
                <a href=""><button>Ir às compras</button></a>
            </div>
        </div>
    </section>
   
    
    <section class="vantagens">
        <div class="interface">
            <article class="itens-container">
                <div class="txt-itens">
                    <h3><span>Smartwatch</span> <br> Samsung Galaxy Fit3 Display 1.6" Grafite</h3>
                    <h1>R$ 109,99</h1>
                    <p>Mais de 4 mil itens vendidos!</p>
                    <button><a href="pages/cadastro.php"> adicionar ao carrinho<i class=" bi bi-cart"></i></a></button>
                    
                </div>
              
                <div class="img-itens">
                    <img src="img/smatwatch.png" alt="">
                </div>
            </article>
        </div>
    </section>
    
    <section class="vantagens">
        <div class="interface">
            <article class="itens-container">
                <div class="img-itens">
                    <img src="img/celular.jpg" alt="">
                </div>
                <div class="txt-itens">
                    <h3><span>Samsung</span> <br>Galaxy S24, Galaxy AI, Selfie de 12MP, Tela de 6.2" 1-120Hz, 256GB, 8GB RAM - Violeta</h3>
                    <h1>R$ 4.000,99</h1>
                    <p>Maior segurança e praticidade!</p>
                    <button><a href="pages/cadastro.php"> adicionar ao carrinho<i class=" bi bi-cart"></i></a></button>
                    
                </div>
              
            </article>
        </div>
        <section class="vantagens">
            <div class="interface">
                <article class="itens-container">
                    <div class="txt-itens">
                        <h3><span>Fone de ouvido Bluetooth</span> <br>Microfone e Cancelamento de Ruído Ativo - 4Leader, à Prova D'água e com até 20 Horas de Reprodução - Preto</h3>
                        <h1>R$ 279,99</h1>
                        <p>Melhor escolha para esportes e atividades ao ar livre!</p>
                        <button><a href="pages/cadastro.php"> adicionar ao carrinho<i class=" bi bi-cart"></i></a></button>
                        
                    </div>
                  
                    <div class="img-itens">
                        <img src="img/fonedeouvido.png" alt="">
                    </div>
                </article>
            <a href="./pages/cadastro.php"><button class="maisI"><span>ver mais produtos </span></button></a>
            </div>
        </section>

    <section class="contato">
        <div class="interface">
            <article class="text-contato">
                <h3>Sugestão ou reclamações? <span>Fale com o suporte</span></h3><p>Resolvemos o seu problema em até 3 dias.</p>
                
            </article>

            <article class="icons-contato">
                <a href="#">
                    <button>
                        <i class="bi bi-envelope-at"></i><p>E-mail</p>
                    </button>
                </a>
                <a href="#">
                    <button>
                        <i class="bi bi-whatsapp"></i><p>Whatsapp</p>
                    </button>
                </a>
                <a href="#">
                    <button>
                        <i class="bi bi-telephone-fill"></i><p>Ligar</p>
                    </button>
                </a>
            </article>

        </div>
    </section>
    <section class="footer">
        <div class="interface">
            <section class="top-footer">
                <a href="#"><button><i class="bi bi-instagram"></i></button></a>
                <a href="#"><button><i class="bi bi-twitter-x"></i></button></a>
                <a href="#"><button><i class="bi bi-facebook"></i></button></a>
            </section>
            <section class="middle-footer">
                <a href="#">Suporte</a>
                <a href="#">Informações</a>
                <a href="#">Marketing</a>
            </section>
            <section class="bottom-footer">
                <p>Infity 2024 &copy </> by Andrey Todos os direitos reservados.</p>
            </section>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>