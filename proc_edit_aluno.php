<?php
        session_start();
        include_once("conexao.php");
		
        $id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
		
        $nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
		
        $cpf= filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_STRING);

        $rg= filter_input(INPUT_POST,'rg',FILTER_SANITIZE_STRING);

        // echo"Nome:$nome <br>";
        // echo"CPF:$cpf <br>";
        // echo"RG:$rg <br>";
		
        $sql= "UPDATE alunos SET nome='$nome',cpf='$cpf',rg='$rg' WHERE id='$id'";
        $comando = mysqli_query($conn,$sql);
		
        if(mysqli_affected_rows($conn))
        {
		      $_SESSION['msg']= "<p style='color:green;'>Aluno $nome editado com sucesso!</p>";
            header("Location:alunos.php");
        }
        else
        {
          $_SESSION['msg']="<p style='color:red;'>Aluno não foi editado com sucesso!</p>";
          header("Location:edit_aluno.php? id=$id");
        }
?>