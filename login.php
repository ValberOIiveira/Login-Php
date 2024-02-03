<?php
session_start();

require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consultar o banco de dados para verificar as credenciais
    try {
        $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = ?');
        $stmt->execute([$email]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            $_SESSION['user_id'] = $usuario['id'];
            $_SESSION['user_nome'] = $usuario['nome'];
            header('Location: dashboard.php'); // Redirecionar para a página de dashboard
            exit();
        } else {
            // Falha no login
            echo "Usuário ou senha incorretos.";
        }
    } catch (PDOException $e) {
        echo "Erro ao realizar login: " . $e->getMessage();
    }
}
?>
