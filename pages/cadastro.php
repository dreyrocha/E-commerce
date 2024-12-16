<?php
if (isset($_POST['btn'])) {
    print_r($_POST['nome']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Cadastro</title>
  <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsividade.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Qwitcher+Grypen:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
</head>

<body>
  <header id="header">
    <div class="interface">
      <div class="logo">
        <a href="../index.php">
          <img src="../img/Logo.png" alt=""></i>
        </a>
        <h3>Para ter acesso ao carrinho <br>cadastre-se!</h3>
      </div>
      <!-- <section class="endNav">
        <nav>
          <ul>
            
            <li class="carrinhoNav">
                <a href="../pages/carrinho.php""><i class=" bi bi-cart"></i>carrinho</a>
            </li>
          </ul>
        </nav>
      </section> -->
    </div>
  </header>
  <div class="container">
    <h1>Cadastro</h1>
  
      <form action="processarcadastro.php" method="post">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
      </div>
      <div class="form-group">
        <label for="confirma-senha">Confirme sua senha</label>
        <input type="password" id="confirma-senha" name="confirma-senha" placeholder="Confirme sua senha" required>
      </div>
      <button type="submit" class="btn">Cadastrar</button>
    </form>
    <div class="footer">
      Já tem uma conta? <a href="./login.php">Faça login</a>
    </div>
  </div>
  
  <script src="../script.js"></script>
</body>

</html>