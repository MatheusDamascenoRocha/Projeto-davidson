<?php
session_start();
  if(isset($_SESSION['logado'])){
    session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <style>
        body{
            background-image: radial-gradient( #053a76,#031C38); 
        }
    </style>
  </head>
<body>
  <main>
      <div class="caixa__login">
            <h2>Login</h2>
            <form action="recebe-login.php" method="post">
                <div class="inputs">
                <div class="caixa__login-input">
                        <input type="text" name="usuario" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Matheus123':null);"
onblur="javascript:(this.placeholder=='Ex: Matheus123'?this.placeholder = '':null);" required />
                        <label>User</label>
                    </div>
                    <div class="caixa__login-input">
                        <input type="password" name="senha" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: 12345':null);"
onblur="javascript:(this.placeholder=='Ex: 12345'?this.placeholder = '':null);"required />
                        <label>Senha</label>
                    </div>
                </div>
      
                    <button>Logar</button>
                   <h3 style="color: white; margin-top: 2rem;">Não possui conta?   <a href="cadastro.php" class="link-cadastrar">Criar</a></h3>
            </form>
        </div>
  </main>
  <footer>
    <h3 style="color:rgba(255,255,255,0.50)">Copyright &copy; - Up-Driver - Todos os Direitos Reservados</h3>
  </footer> 
</body>
</html>