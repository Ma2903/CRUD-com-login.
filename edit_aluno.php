<?php
     session_start();// iniciando sessão para administrar as mensagens
     include_once("conexao.php");// incluindoaconexão comobanco de dados
     $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
     $sql= "SELECT * FROM alunos WHERE id = '$id'";
     $comando=mysqli_query($conn,$sql);
     $row_alunos=mysqli_fetch_assoc($comando);
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CRUD-Editar</title>
        <style>
            *{
                padding: 0;
                margin: 0;
            }
            #body{
                flex-direction: column;
                display: flex;
                width: 100vw;
                height: 100vh;
                background: #957dad;
				justify-content: center;
				align-items: center;
            }
            #editft{
                display: flex;
                justify-content: center;
                align-items: center;
                border-top-right-radius: 50px;
                border-top-left-radius: 50px;
				background:white;
				width: 30%;
				height: 50%;
            }
            #editft > img{
                width: 90%;
            }
            #form{
                border-bottom-right-radius: 50px;
                border-bottom-left-radius: 50px;
                background: rgba(255, 255, 255, 0.589);
                width: 30%;
				height: 28%;
                font-size: 30px;
                text-align: center;
            }
            input{
                width: 60%;
				height: 40%;
                padding: 5px;
            }
        </style>
    </head>
    <body id= body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <br>
        <h1>Editar Aluno</h1> <br>
        <?php
        if(isset($_SESSION['msg']))
        {
            echo$_SESSION['msg'];
            unset($_SESSION['msg']);
		}
		?>
        <div id=editft>
            
            <img src="edit_aluno.png">  
        </div>
        <div id=form>
        <form method="POST" action="proc_edit_aluno.php">
        <input type="hidden"name="id"value="<?php echo $row_alunos['id'];?>">
              <label>Nome:</label>
              <input type="text"name="nome" class="btn btn-outline-dark" value="<?php echo$row_alunos['nome'];?>">
			  <br>
              <label> CPF: </label>
              <input type="number"name="cpf" class="btn btn-outline-dark" value="<?php echo$row_alunos['cpf'];?>">
              <br>
              <label> RG: </label>
              <input type="number"name="rg" class="btn btn-outline-dark" value="<?php echo$row_alunos['rg'];?>">
              <br>
              <input type="submit" class="btn btn-outline-dark" value="Editar">
         </form>
        </div>
	   </body>
	</html>