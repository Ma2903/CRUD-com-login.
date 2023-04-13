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
              display: flex;
              justify-content: center;
              align-items: center;
				      background: white;
				      width: 30%;
				      height: 70vh;
				      align-items: right;
            }
            #body{
                width: 100vw;
                height: 100vh;
                background: #957dad;
			          justify-content: center;
			          align-items: center;
			          font-size: 30px;
			          display: flex;
            }
            #form{
				      background: rgba(255, 255, 255, 0.589);
				      border-top-left-radius: 50px;
				      border-bottom-left-radius: 50px;
				      width: 30%;
              height: 70vh;
				      font-size: 35px;
			      }
            #deleteft > img{
              width: 90%;
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
          $id =filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
          $sql="SELECT * FROM alunos WHERE id = '$id'";
          $comando = mysqli_query($conn,$sql);
          $row_alunos = mysqli_fetch_assoc($comando);
          ?>
        <form method="POST" action="proc_delete_aluno.php">
        <h3> Deletar Aluno </h3><br>
        <input type="hidden"name="id"value="<?php echo $row_alunos['id'];?>">
        <input type = "hidden" name ="nome" value =" <?php echo $row_alunos ['nome']; ?>">
              <label>Nome:</label>
              <input type="text"name="nome" class="btn btn-outline-dark" placeholder="Digite o seu nome completo"value="<?php echo$row_alunos['nome'];?>"> 
              <br><br>
              <label> CPF: </label>
              <input type="number"name="cpf" class="btn btn-outline-dark" placeholder="Digite o seu CPF"value="<?php echo$row_alunos['cpf'];?>">
              <br><br>
			        <label> RG: </label>
              <input type="number"name="rg" class="btn btn-outline-dark" placeholder="Digite o seu RG"value="<?php echo$row_alunos['rg'];?>">
              <br><br>
              <h5> Essa operação é irreversível - Deseja realmente excluir este aluno? </h4>
              <input type = "submit" value = "Sim" class="btn btn-outline-dark">
         </form>
        </div>
      <div id=deleteft><img src="delete_aluno.png"> </div>
      <?php
      }
      else 
      {
        echo "<p>Requisição inválida! - Erro ao deletar</p>";
      }
      ?>
     </body>
</html>