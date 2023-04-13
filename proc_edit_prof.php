<?php
        session_start();
        include_once("conexao.php");
		
        $id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT);
		
        $nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);

		    $datanascm= filter_input(INPUT_POST,'datanascm',FILTER_SANITIZE_STRING);

        $formacao= filter_input(INPUT_POST,'formacao',FILTER_SANITIZE_STRING);

        $cep= filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT);

        $endereco= filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);

        $cidade= filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);

        // echo"Nome:$nome <br>";
        // echo"datanascm:$datanascm <br>";
        //echo"formacao:$formacao <br>";
        //echo"endereco:$endereco <br>";
        //echo"cidade:$cidade <br>";
		
        $sql= "UPDATE professores SET nome='$nome',datanascm='$datanascm', 
        formacao='$formacao',cep = '$cep', endereco='$endereco', cidade='$cidade'";
        $comando = mysqli_query($conn,$sql);
		
        if(mysqli_affected_rows($conn))
        {
		        $_SESSION['msg']= "<p style='color:green;'>Professor $nome editado com sucesso!</p>";
            header("Location: professores.php");
        }
        else
        {
          $_SESSION['msg']="<p style='color:red;'>Professor não foi editado com sucesso!</p>";
          header("Location:edit_prof.php?id=$id");
        }
?>