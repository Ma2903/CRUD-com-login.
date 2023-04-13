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
			*{
                padding: 0;
                margin: 0;
            }
            #users{
				      border-top-right-radius: 50px;
				      border-bottom-right-radius: 50px;
					  display: flex;
					  justify-content: center;
					  align-items: center;
				      background: white;
				      width: 38%;
				      height: 84vh;
				      align-items: right;
            }
            #body{
                      width: 100vw;
                      height: 100vh;
                      background: #008b8b;
			          justify-content: center;
			          align-items: center;
			          font-size: 30px;
			          display: flex;
            }
            #form{
				display: flex;
				justify-content: center;
				align-items: center;
				      background: rgba(255, 255, 255, 0.589);
				      border-top-left-radius: 50px;
				      border-bottom-left-radius: 50px;
				      width: 38%;
                      height: 84vh;
				      font-size: 35px;
			}
            input{
                width: 55%;
			    height: 40%;
                padding: 5px;
            }
		 </style>
	</head>
	<body id=body>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<div id=form>
	<form method="POST" action="proc_cad_prof.php">
		<h1> Cadastrar Professor </h1>
			<label>Nome: </label>
			<input type="text" name="nome" class="btn btn-outline-dark" required placeholder="Digite o nome completo"><br>
            <div>
			<label>Data de nascimento: </label>
			<input type="date" name="datanascm" class="btn btn-outline-dark" required placeholder="Digite sua data de nascimento">
			</div>
            <label>Formação: </label>
			<input type="text" name="formacao" class="btn btn-outline-dark" required placeholder="Digite sua formação"><br>
            <label>Endereço: </label>
			<input type="text" name="endereco" class="btn btn-outline-dark" required placeholder="Digite seu endereço"><br>
			<label>CEP: </label>
			<input type="text" name="cep" class="btn btn-outline-dark" required placeholder="Digite o seu CEP"><br>
			<label>Cidade: </label>
			<input type="text" name="cidade" class="btn btn-outline-dark" required placeholder="Digite o nome de sua ciade"><br>
			<input type="submit" value="Cadastrar"  class="btn btn-outline-dark">
		</form>
		</div>
		<div id=users> <img src="cadprof.png"> </div>
		<?php
		if (isset($_SESSION['msg'])) //area de verificação da mensagem que será mostrada
		{
			echo $_SESSION['msg'];
			unset ($_SESSION['msg']);
		}
		?>
	</body>
</html>