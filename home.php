<?php
session_start();
if(!isset($_SESSION['logado'])){
  header("location:login.php");
  session_destroy();
}
if (isset($_GET['sair'])) {
  header('location:login.php');
  session_destroy();
}
if(isset($_SESSION['hora_logada'])){
  $tempo = time() - $_SESSION['hora_logada'];
}
if ($tempo > $_SESSION['limite']) {
  unset($_SESSION['logado']);
  unset($_SESSION['hora_logada']);
  unset($_SESSION['limite']);
  session_destroy();
  header("location:login.php");
}else {
  $_SESSION['hora_logada'] = time();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Up-Driver</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
</head>
<body>
  <?php include'./header.php'; ?>

    <main>
      <div class="caixa__login">
        <h2>Cadastro</h2>
        <form action="recebe-cadastro.php" method="post">
          <div class="inputs">
            <div class="caixa__login-input">
                <input type="text" name="usuario" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Matheus123':null);"
                onblur="javascript:(this.placeholder=='Ex: Matheus123'?this.placeholder = '':null);" required>
                <label>User</label>
            </div>
            <div class="caixa__login-input">
                <input type="password" minlength="6" name="senha" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Matheus123':null);"
                onblur="javascript:(this.placeholder=='Ex: Matheus123'?this.placeholder = '':null);" required>
                <label>Senha</label>
            </div>
            </div>
          </div>
        <button class="logar">Cadastrar</button>
        </form>
      </div>


    </main>
</body>
</html>
