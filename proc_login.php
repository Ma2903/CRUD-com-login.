<?php
    session_start();// iniciandoasessão
    include_once("conexao.php");
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha= MD5(filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING));
   // aplicandoacryptografia MD5 na senha que veio do formulário
   
    $sql = "SELECT * FROM usuarios WHERE email = '$email'and senha = '$senha' LIMIT 1";
    $comando= mysqli_query($conn,$sql);
   $row_usuario=mysqli_fetch_array($comando);
   
   if(!empty($row_usuario['nome']))// se achou alguma informação
    {
       $_SESSION['msg']="<p style='color:green;'>Bem vindo ao Sistema, "
        . $row_usuario['nome']. "!</p>";
       header("Location: index2.php");// vai abrirapágina principal
	}
   else // se não achou
    {
       $_SESSION['msg']="<p style='color:red;'>Email ou Senha incorretos!</p>";
        //enviará essa mensagem de erro
       header("Location: index.php"); // vai apontar para refazer o login
	}
?>