<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferindo Cadastro</title>
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <script type="text/javascript">
        function ok(){
          setTimeout("window.location='login.php'");
        }
        function error(){
          setTimeout("window.location='cadastro.php'");
        }
     </script>   
</head>
<body>
    <?php 
     require './conexao_login.php';
      $usuario=$_POST['usuario'];
      $senha=password_hash($_POST['senha'], PASSWORD_DEFAULT);
      $email=$_POST['email'];
      $cpf=$_POST['cpf'];

      $inserir = $mysqli->query("INSERT INTO login VALUES(0,'$usuario','$senha','$email','$cpf')");

      if($inserir){
        echo"<script>ok()</script>";
      }else{
        echo"<script>error()</script>";
      }
    
    
    ?>
</body>
</html>