
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

      $sql_code = "SELECT * FROM login where usuario = '$usuario' LIMIT 1";
      $sql_exec = $mysqli-> query($sql_code) or die($msqli->error);

      $resultado = $sql_exec->fetch_assoc();
      if(password_verify($senha,$resultado['senha'])){
           session_start();
           $_SESSION['limite']=20 * 60;
           $_SESSION['hora_logada']= time();
           $_SESSION['logado'] = true;
           echo"<script>ok()</script>";
      }else{
           echo"<script>error()</script>";
      }
    ?>
</body>
</html>
