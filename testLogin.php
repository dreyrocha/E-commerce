
<?php
session_start(); // Inicia a sessão no início do script

if (isset($_POST['btn'])) {
    if (!empty($_POST['email']) && !empty($_POST['senha'])) {
        include_once('conexao.php'); 

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Prepara e executa a consulta SQL
        $stmt = $mysqli->prepare("SELECT senha FROM login WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senhaHash = $row['senha']; 

            if (password_verify($senha, $senhaHash)) {
                // Login bem-sucedido
                $_SESSION['email'] = $email; 
                echo "<script>
                        alert('Login bem-sucedido!');
                        window.location.href = 'pages/carrinho_compras.php';
                      </script>";
                exit;
            } else {
                // Senha incorreta
                echo "<script>
                        alert('Senha incorreta!');
                        window.location.href = 'pages/login.php';
                      </script>";
                exit;
            }
        } else {
            // Email não encontrado
            echo "<script>
                    alert('E-mail não encontrado!');
                    window.location.href = 'pages/login.php';
                  </script>";
            exit;
        }

        $stmt->close(); 
    } else {
      
        echo "<script>
                alert('Por favor, preencha todos os campos!');
                window.location.href = 'pages/login.php';
              </script>";
        exit;
    }
}
?>
