<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> CRUD - Cadastrar </title>
		<style>
             *{
                margin: 0;
                padding: 0;
            }
			#users{
				border-top-right-radius: 50px;
				border-bottom-right-radius: 50px;
				background-image: url(users.jpg);
				width: 30%;
				height: 65vh;
				align-items: center;
			}
            #body{
                width: 100%;
                height: 100vh;
                background: #f5bda6;
				justify-content: center;
				align-items: center;
				font-size: 30px;
				display: flex;
            }
			#form{
				background: rgba(255, 255, 255, 0.589);
				border-top-left-radius: 50px;
				border-bottom-left-radius: 50px;
				width: 25%;
                height: 65vh;
				font-size: 35px;
			}
		 </style>
	</head>
	<body id=body>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<div id=form>
		<center>
	<form method="POST" action="proc_cad_usuario.php">
		<h1> Cadastrar Usúario </h1><br>
			<label>Nome: </label>
			<input type="text" name="nome" class="btn btn-outline-dark" required placeholder="Digite o nome completo"><br><br>
			<label>E-mail: </label>
			<input type="email" name="email" class="btn btn-outline-dark" required placeholder="Digite o seu melhor e-mail"><br><br>
			<label>Senha: </label>
			<input type="password" name="senha" class="btn btn-outline-dark" required placeholder="Digite sua senha"><br><br>
			<input type="submit" value="Cadastrar"  class="btn btn-outline-dark">
		</form>
		</center>
		</div>
		<div id=users> </div>
		<?php
		if (isset($_SESSION['msg'])) //area de verificação da mensagem que será mostrada
		{
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
		?>
	</body>
</html>