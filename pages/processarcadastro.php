<?php
// Inclui o arquivo de conexão com o banco
require_once("../conexao.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirma-senha'];

    // Valida se as senhas coincidem
    if ($senha !== $confirmaSenha) {
        if ($senha !== $confirmaSenha) {
            echo "<script>
                alert('As senhas não coincidem, tente novamente!');
                window.location.href = 'cadastro.php';
              </script>";
        }
        die("As senhas não coincidem. Por favor, tente novamente.");
    }

    // Criptografa a senha antes de salvar (opcional, mas recomendado)
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    // Prepara e executa o comando SQL para inserir os dados
    $sql = "INSERT INTO login (nome, email, senha) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        if ($stmt->execute()) {
            echo "<script>
            alert('Cadastro bem-sucedido!');
            window.location.href = 'cadastro.php';
          </script>";
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $mysqli->error;
    }

    
    $mysqli->close();
} else {
    echo "Método inválido.";
}
?>
