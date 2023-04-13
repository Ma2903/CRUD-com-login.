<?php
     session_start();// iniciando sessão para administrar as mensagens
     include_once("conexao.php");// incluindoaconexão comobanco de dados
     $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
     $sql= "SELECT * FROM professores WHERE id = '$id'";
     $comando=mysqli_query($conn,$sql);
     $row_prof=mysqli_fetch_assoc($comando);
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
            #editft{
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
				border-top-left-radius: 50px;
				border-bottom-left-radius: 50px;
				width: 38%;
				height: 84vh;
				align-items: right;
            }
            #editft > img{
                width: 80%;
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
				      border-top-right-radius: 50px;
				      border-bottom-right-radius: 50px;
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
    <body id= body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php
        if(isset($_SESSION['msg']))
        {
            echo$_SESSION['msg'];
            unset($_SESSION['msg']);
		}
		?>
        <div id=editft> 
             <img src="edit_prof.png"> 
        </div>
        <div id=form>
        <form method="POST" action="proc_edit_prof.php">
        <h1>Editar professor</h1> 
        <input type="hidden"name="id"value="<?php echo $row_prof['id'];?>">
              <label>Nome:</label>
              <input type="text"name="nome" class="btn btn-outline-dark" value="<?php echo$row_prof['nome'];?>">
			  <br>
              <label> Data de nascimento: </label>
              <input type="date" name="datanascm" class="btn btn-outline-dark" value="<?php echo$row_prof['datanascm'];?>">
              <br>
              <label> Formação: </label>
              <input type="text"name="formacao" class="btn btn-outline-dark" value="<?php echo$row_prof['formacao'];?>">
              <br>
              <label> Endereço: </label>
              <input type="text"name="endereco" class="btn btn-outline-dark" value="<?php echo$row_prof['endereco'];?>">
              <br>
              <label> CEP: </label>
              <input type="text"name="cep" class="btn btn-outline-dark" value="<?php echo$row_prof['cep'];?>">
              <br>
              <label> Cidade: </label>
              <input type="text"name="cidade" class="btn btn-outline-dark" value="<?php echo$row_prof['cidade'];?>">
              <br>
              <input type="submit" class="btn btn-outline-dark" value="Editar">
         </form>
        </div>
	   </body>
	</html>