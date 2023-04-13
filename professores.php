<?php
    session_start();// iniciando sessão para administrar as mensagens
    include_once("conexao.php");// incluindoaconexão comobanco de dados
    $sql="SELECT * FROM professores";
    $comando=mysqli_query($conn,$sql);
    $row_prof=mysqli_fetch_assoc($comando)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
           *{
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
            }
            body{
                width: 100%;
                height: 100vh;
                background-image: url(ftprof.png);
                background-size: 100%;
            }
            header{
                position: relative;
                background: #008b8b;
                width: 100%;
                height: 15%;
                display: flex;
                align-items: center;
                justify-content: space-around;    
            }
            header > .butoes{
                right: 2%;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 5%;
                height: 50%;
                background: white;
                border-radius: 20px ;
            }
            header > .meio{
                display: flex;
                justify-content: space-around;
                align-items: center;
                width: 50%;
                height: 100%;
            }
            header > .meio .butoes{
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 25px;
                background: white;
                width: 30%;
                height: 50%;
            }
            .user{
                left: 2%;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 10%;
                height: 70%;
                background: white;
                border-radius: 20px ;
            }
            .user span{
                text-align: center;
                width: 60%;
            }
            .user i{
                font-size: 30px;
            }
            .menu .butoes{
                display: flex;
                justify-content:center ;
                align-items: center;
                border-radius: 20px;
                width: 80%;
                height: 10%;
                background: white;
            }
            body > .prof{
                margin-left: 15%;
                width: 70%;
                background: rgba(255, 255, 255, 0.589);
                height: 85% ;
            }
            .prof{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .prof table{
                width: 100%;
                height: 10%;
            }
            tr,td,th{
                border-radius: 10px;
                text-align: center;
                border: 2px solid black;
            }
    </style>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="user">
            <i class='bx bxs-user'></i>
            <span>
                <?php
                echo $row_prof['nome'];
                ?>
            </span>
        </div>
        <div class="meio">
            <div class="butoes" onclick= "window.location.href = 'index2.php'";>
            Pagina principal
         </div>
         <div class="butoes" onclick= "window.location.href = 'cad_prof.php'";>
            Cadastrar novo professor
         </div>
    </header>
    <div class="prof" id="prof">
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de nascimento</th>
                <th>Formação</th>
                <th>Endereço</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th colspan="2"> Manutenção do professor</th>
            </tr>
            <?php
        echo "<meta charset='utf-8'>";
          $sql="SELECT * FROM professores";
          $comando=mysqli_query($conn,$sql);
          while($row_prof=mysqli_fetch_assoc($comando))
          {
            $datanascm=explode("-",$row_prof['datanascm']);
            echo "<tr> <td>" . $row_prof['id'] ."</td>";
            echo "<td>" . $row_prof['nome'] ."</td>";
            echo "<td>" . $datanascm[2]."-".$datanascm[1]. "-".$datanascm[0]. "</td>";
            echo "<td>" . $row_prof['formacao'] ."</td>";
            echo "<td>" . $row_prof['endereco'] ."</td>";
            echo "<td>" . $row_prof['cep'] ."</td>";
            echo "<td>" . $row_prof['cidade'] ."</td>";
            echo "<td> <a href='edit_prof.php?id=" . $row_prof ['id']."'> Editar </a> </td>";
            echo "<td> <a href='delete_prof.php?id=" . $row_prof ['id']."'> Deletar </a> </td> </tr>";
          }
        ?>
        </table>
    </div>
         <?php
	  if(isset($_SESSION['msg']))// verificando o conteudo da variavel e mostrando
      {
	      echo$_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
</body>
</html>