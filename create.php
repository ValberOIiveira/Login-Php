<?php
session_start();

require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Hash da senha antes de armazenar no banco de dados (melhora a segurança)
    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    try {
        $stmt = $pdo->prepare('INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)');
        $stmt->execute([$nome, $email, $hashedSenha]);

        // Redirecionar para a página de login após o cadastro bem-sucedido
        header('Location: login.html');
        exit();
    } catch (PDOException $e) {
        echo "Erro ao criar usuário: " . $e->getMessage();
    }
}
?>

