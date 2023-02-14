<!DOCTYPE html>
<html>
<head>
	<title>Confirmação de Login</title>
	<meta charset="utf-8">
	<script>
		function ok(){
			setTimeout("window.location='home.php'",0);
		}
		function error(){
			setTimeout("window.location='login.php'",0);
		}
	</script>
</head>
<body>
</body>
</html>
<?php 
	require './conexao.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$resultado = $mysqli -> query("SELECT * FROM login WHERE usuario ='$usuario' AND senha='$senha'");
	if(mysqli_num_rows($resultado)>0){
		session_start();
		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['senha'] = $_POST['senha'];
		echo "<center><h2>Login Efetuado com Sucesso!</h2></center>";
		echo "<script>ok()</script>";
	}else{
		echo "<center><h2>Usuário e/ou senha incorreto(s)</h2></center>";
		echo "<script>error()</script>";
	}
?>