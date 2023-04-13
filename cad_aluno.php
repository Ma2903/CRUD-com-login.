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
			#aluno{
				display: flex;
				justify-content: center;
				align-items: center;
				border-top-right-radius: 50px;
				border-bottom-right-radius: 50px;
				background-color: white;
				background-size: 100%;
				width: 30%;
				height: 70vh;
				align-items: right;
				background-repeat: no-repeat;
			}
			#aluno > img{
				width: 90%;
			}
            #body{
                width: 100%;
                height: 100vh;
                background: #957dad;
				justify-content: center;
				align-items: center;
				font-size: 30px;
				display: flex;
            }
			#form{
				display: flex;
				justify-content: center;
				background: rgba(255, 255, 255, 0.589);
				border-top-left-radius: 50px;
				border-bottom-left-radius: 50px;
				width: 30%;
                height: 70vh;
				font-size: 35px;
			}
		 </style>
	</head>
	<body id=body>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<div id=form>
		<center>
	<form method="POST" action="proc_cad_aluno.php">
	<br>
		<h1> Cadastrar Aluno </h1><br>
			<div>
				<label>Nome: </label>
				<input type="text" name="nome" class="btn btn-outline-dark" required placeholder="Digite o nome completo">
			</div>
			<div><br>
				<label>CPF: </label>
				<input type="number" name="cpf" class="btn btn-outline-dark" required placeholder="Digite o seu cpf">
			</div>
			<div><br>
				<label>RG: </label>
				<input type="number" name="rg" class="btn btn-outline-dark" required placeholder="Digite seu rg">
			</div>
			<input type="submit" value="Cadastrar"  class="btn btn-outline-dark">
		</form>
		</center>
		</div>
		<div id=aluno>
			<img src="cadaluno.png">
		</div>
		<?php
		if (isset($_SESSION['msg'])) //area de verificação da mensagem que será mostrada
		{
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
		?>
	</body>
</html>