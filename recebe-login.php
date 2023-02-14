<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <title>Conferindo Login</title>
    <script type="text/javascript">
        function ok(){
          setTimeout("window.location='home.php'");
        }
        function error(){
          setTimeout("window.location='login.php'");
        }
        </script>
</head>
<body>
<?php 
      require './conexao_login.php';
      $usuario=$_POST['usuario'];
      $senha=$_POST['senha'];

      $resultado = $mysqli -> query("SELECT * FROM login WHERE usuario='$usuario' AND senha='$senha'");

      if(mysqli_num_rows($resultado)>0){
           session_start();
           $_SESSION['usuario'] =$_POST['usuario']; 
           $_SESSION['senha'] =$_POST['senha']; 
           echo"<script>ok()</script>";
      }else{
           echo"<script>error()</script>";
      }
    ?>
</body>
</html>
