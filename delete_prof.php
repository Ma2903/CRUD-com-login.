<?php
    session_start();
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang = "pt-br">
     <head>
          <meta charset = " utf-8 ">
          <title> CRUD - Deletar </title>
          <style>
            *{
                padding: 0;
                margin: 0;
            }
            #deleteft{
				      border-top-right-radius: 50px;
				      border-bottom-right-radius: 50px;
				      background: white;
				      width: 40%;
				      height: 75vh;
				      align-items: right;
            }
            #deleteft > img{
              width: 90%;
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
				      background: rgba(255, 255, 255, 0.589);
				      border-top-left-radius: 50px;
				      border-bottom-left-radius: 50px;
				      width: 45%;
              height: 75vh;
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
          <br>
        <div id=form>
          <center>
          <?php
            if(isset($_SESSION['msg']))
          {
            echo$_SESSION['msg'];
            unset($_SESSION['msg']);
		      }
		      ?>
          <?php
        if (isset($_GET['id']))
        {
          $id=filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
          $sql="SELECT * FROM professores WHERE id = '$id'";
          $comando = mysqli_query($conn,$sql);
          $row_prof = mysqli_fetch_assoc($comando);
          ?>
        <form method="POST" action="proc_delete_prof.php">
        <h3> Deletar Professor </h3>
        <input type="hidden"name="id"value="<?php echo $row_prof['id'];?>">
        <input type = "hidden" name ="nome" value =" <?php echo $row_prof ['nome']; ?>">
              <label>Nome:</label>
              <input type="text"name="nome" class="btn btn-outline-dark" value="<?php echo$row_prof['nome'];?>">
              <label> Data de nascimento: </label>
              <input type="date"name="datanascm" class="btn btn-outline-dark" value="<?php echo$row_prof['datanascm'];?>">
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
              <h4> Essa operação é irreversível - Deseja realmente excluir este professor? </h4>
               <input type = "submit" value = "Sim" class="btn btn-outline-dark">
         </form>
          </center>
        </div>
      <div id=deleteft> <img src="delete_prof.png"></div>
      <?php
      }
      else
      { 
      echo "<p>Requisição inválida! - Erro ao deletar</p>";
      }
      ?>
     </body>
</html>