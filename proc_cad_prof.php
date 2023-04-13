<?php
	session_start();
	include_once("conexao.php");
	
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
		$datanascm = filter_input(INPUT_POST, 'datanascm', FILTER_SANITIZE_STRING);
		$formacao = filter_input (INPUT_POST, 'formacao', FILTER_SANITIZE_STRING);
        $endereco = filter_input (INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
        $cep = filter_input (INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
        $cidade = filter_input (INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
			
		$sql = "INSERT INTO professores (nome, datanascm, formacao, endereco, cep, cidade) 
        VALUES ('$nome', '$datanascm', '$formacao', '$endereco', '$cep', '$cidade')";
		$comando = mysqli_query($conn, $sql);
		
		if (mysqli_insert_id($conn))
		{
			$_SESSION['msg'] = "<p style='color:green;'> Aluno cadastrado com sucesso</p>";
			header("Location: professores.php");
		}
		else
		{
			$_SESSION['msg'] = "<p style='color:red;'> Aluno não foi cadastrado com sucesso</p>";
			header("Location: cad_prof.php");
		}
?>