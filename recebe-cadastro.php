<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
		function ok(){
			setTimeout("window.location='login.php'",2000);
		}
		function error(){
			setTimeout("window.location='cadastro.php'",2000);
		}
	</script>
</head>
<body>
    <?php 
    require "./conexao_login.php";

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];


    $inserir = $mysqli ->query("INSERT INTO login VALUES (0,'$usuario','$senha','$email','$cpf')")

    if($inserir){
        echo "<center><h2>Cadastro Realizado</h2></center>";
        echo "<script>ok()</script>";
    }else{
        echo "<center><h2>Usuário e/ou senha incorreto(s)</h2></center>";
		echo "<script>error()</script>";
    }
    ?>
</body>
</html>