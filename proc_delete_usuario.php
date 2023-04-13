<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

    $sql = "DELETE FROM usuarios WHERE id = $id";
    $comando = mysqli_query($conn, $sql);

    if ($conn->query($sql) === true)
    {
        $_SESSION['msg'] = "<p style='color:green;'> Usuário $nome excluido com sucesso! </p>";
        header("Location: usuarios.php");
    }
    else
    {
        $_SESSION['msg'] = "<p style='color:red;'> Usuário $nome não foi excluido! </p>";
        header("Location: usuarios.php");
    }
?>