<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $datanascm = filter_input(INPUT_POST, 'datanascm', FILTER_SANITIZE_STRING);
    $formacao = filter_input(INPUT_POST, 'formacao', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);

    $sql = "DELETE FROM professores WHERE id = $id";
    $comando = mysqli_query($conn, $sql);

    if ($conn->query($sql) === true)
    {
        $_SESSION['msg'] = "<p style='color:green;'> Professor $nome excluido com sucesso! </p>";
        header("Location: professores.php");
    }
    else
    {
        $_SESSION['msg'] = "<p style='color:red;'> Professor $nome não foi excluido! </p>";
        header("Location: delete_prof.php");
    }
?>