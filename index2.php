<?php
    session_start();// iniciando sessão para administrar as mensagens
    include_once("conexao.php");// incluindoaconexão comobanco de dados
    $sql="SELECT * FROM usuarios";
    $comando=mysqli_query($conn,$sql);
    $row_usuario=mysqli_fetch_assoc($comando)
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
            /* 
            #f5bda6
             */
            body{
                width: 100%;
                height: 100vh;
                background-image: url(ftescola.jpg);
                background-size: 110%;
            }
            header{
                position: relative;
                background: #f5bda6;
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
                width: 10%;
                height: 60%;
                background: white;
                border-radius: 20px ;
            }
            header > .meio{
                display: flex;
                justify-content: space-around;
                align-items: center;
                width: 42%;
                height: 70%;
                background-image: url(ftmeio.jpeg);
                border-top-right-radius: 50px;
				border-bottom-right-radius: 50px;
                border-top-left-radius: 50px;
			    border-bottom-left-radius: 50px;
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
            .menu{
                z-index: 100;
                overflow: hidden;
                left: 0;
                top: 0;
                position: absolute;
                width: 0%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                background: #f5bda6;
                animation: fecha 1s;
            }
            .menu.open{
                z-index: 100;
                animation: abre 1s;
                overflow: hidden;
                left: 0;
                top: 0;
                position: absolute;
                width: 20%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-around;
                align-items: center;
                background: #f5bda6;
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
            @keyframes abre {
                0%{width: 0%;}
                100%{width: 20%;}
            }
            @keyframes fecha {
                0%{width: 20%;}
                100%{width: 0%;}
            }
            body > .alunos, body > .usuarios{
                margin-left: 15%;
                width: 70%;
                background: rgba(255, 255, 255, 0.589);
                height: 85% ;
            }
            .alunos,.usuarios{
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .alunos table,.usuarios table{
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
    <script>
        function menu(){
            let box = document.getElementById('menu')
            box.classList.toggle('open')    
        }
        function troca(qual){
            let usuarios = document.getElementById('usuarios')
            usuarios.style.display = 'none'
            switch (qual) {
                case 1:
                    usuarios.style.display = 'flex'
                    break;
                default:
                    break;
            }
        }
    </script>
</head>
<body onload="troca()">
    <div class="menu" id="menu">
        <h1>Menu</h1>
        <div class="butoes">
           <a href="alunos.php"> Alunos </a>
        </div>
        <div class="butoes">
        <a href="professores.php"> Profesores </a>
        </div>
        <div class="butoes">
           <a href="usuarios.php"> Usuarios </a>
        </div>
        <div class="butoes">
        <a href="exit.php"> Sair </a>
        </div>
    </div>
    <header>
        <div class="user">
            <i class='bx bxs-user'></i>
            <span>
                <?php
                echo $row_usuario['nome'];
                ?>
            </span>
        </div>
        <div class="meio">
    </div>
        <div class="butoes" onclick="menu()">
            Menu
        </div>
    </header>
         <?php
	  if(isset($_SESSION['msg']))// verificando o conteudo da variavel e mostrando
      {
	      echo$_SESSION['msg'];
        unset($_SESSION['msg']);
      }
      ?>
</body>
</html>