<?php
    session_start();
    include_once("conexao.php"); //incluindo a conexão com o banco de dados
?>
                <?php
                //mostrando a msg de login e senha inválidos!
                    if(isset($_SESSION['msg']))
                    {
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login De Acesso</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css.css'>
</head>
<body id=body>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <div class="menu">
        <div class="imagem">
            <img src="ftlogin.png" width="100%" height="100%">
        </div>
        <div class="titulo">
            Login De Acesso
        </div>
        <div class="formulario">
            <form action="proc_login.php" method="POST">  <!-- apontando para a tela principal-->
                <div>
                    <span>E-mail: </span>  <input type="text" size="60" name="email"  placeholder="Digite o E-mail" class="btn btn-outline-dark">
                </div>
                <div>
                    <span>Senha: </span>  <input type="password" size="60" name="senha" placeholder="Digite a Senha" class="btn btn-outline-dark">
                </div>
                <div>
                    <input type="submit" value= "Entrar no  sistema" id="botao" class="btn btn-outline-dark">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
