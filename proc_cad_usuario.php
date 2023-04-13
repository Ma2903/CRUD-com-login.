<?php
	session_start();
	include_once("conexao.php");
	
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		$senha = md5 (filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
			
		$sql = "INSERT INTO usuarios (nome, email, created,senha) VALUES ('$nome', '$email', NOW(),'$senha')";
		$comando = mysqli_query($conn, $sql);
		
		if (mysqli_insert_id($conn))
		{
			$_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso</p>";
			header("Location: usuarios.php");
		}
		else
		{
			$_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso</p>";
			header("Location: cad_usuario.php");
		}
?>