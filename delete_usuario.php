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
              display: flex;
              justify-content: center;
              align-items: center;
				      border-top-right-radius: 50px;
				      border-bottom-right-radius: 50px;
				      background:white;
				      width: 30%;
				      height: 60vh;
				      align-items: right;
            }
            #deleteft > img{
              width: 90%;
            }
            #body{
                width: 100vw;
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
				      width: 34%;
              height: 60vh;
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
          $sql="SELECT * FROM usuarios WHERE id = '$id'";
          $comando = mysqli_query($conn,$sql);
          $row_usuario = mysqli_fetch_assoc($comando);
          ?>
        <form method="POST" action="proc_delete_usuario.php">
        <h3> Deletar Usuário </h3><br>
        <input type="hidden"name="id"value="<?php echo $row_usuario['id'];?>">
        <input type = "hidden" name ="nome" value =" <?php echo $row_usuario ['nome']; ?>">
              <label>Nome:</label>
              <input type="text"name="nome" class="btn btn-outline-dark" placeholder="Digite o seu nome completo"value="<?php echo$row_usuario['nome'];?>"> 
              <br><br>
              <label> Email: </label>
              <input type="email"name="email" class="btn btn-outline-dark" placeholder="Digite o seu melhore-mail"value="<?php echo$row_usuario['email'];?>">
              <br><br>
              <h4> Essa operação é irreversível - Deseja realmente excluir este usuário? </h4>
               <input type = "submit" value = "Sim" class="btn btn-outline-dark">
         </form>
          </center>
        </div>
      <div id=deleteft><img src="deleteft.jpg"> </div>
      <?php
      }
      else
      { 
      echo "<p>Requisição inválida! - Erro ao deletar</p>";
      }
      ?>
     </body>
</html>