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
          setTimeout("window.location='home.php'");
        }
        function error(){
          setTimeout("window.location='home.php'");
        }
     </script>   
</head>
<body>
    <?php 
     require './conexao_login.php';
      $nome=$_POST['nome'];
      $cpf=$_POST['cpf'];
      $telefone=$_POST['telefone'];
      $marca=$_POST['marca'];
      $modelo=$_POST['modelo'];
      $placa=$_POST['placa'];
      $servico=$_POST['servico'];
      $data=$_POST['data'];
      $funcionario=$_POST['funcionarios'];
      $inserir = $mysqli->query("INSERT INTO servicos VALUES(0,'$nome','$cpf','$telefone','$marca','$modelo','$placa','$servico','$data','$funcionario')");

      if($inserir){
        echo"<script>ok()</script>";
      }else{
        echo"<script>error()</script>";
      }
    
    
    ?>
</body>
</html>
