<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
    <link rel="icon" href="img/urano.png" type="image/png">
</head>
<body>
    <form action="recebe_login.php" method="post">
      <main>
       <div class="main-l">
         <h1 class="titulo-principal"><em>Bem vindo ao nosso site!</em></h1>
         <img src="img/mecanico.svg" alt="">
       </div>
       <div class="main-r">
         <div class="card">
           <h2 class="titulo-card">LOGIN</h2>
           <div class="textfield">
             <label class="titulo-input">Usuario:</label>
             <input type="text" placeholder="Ex:Matheus123" class="login" name="usuario">
           </div>
           <div class="textfield">
             <label class="titulo-input">Senha:</label>
             <input type="password" placeholder="Ex:12345" class="login" name="senha">
           </div>
           <button class="botao"><strong>LOGAR</strong></button>
           <a href="cadastro.php" class="cadastro"><u>Cadastra-se</u></a>
         </div>
       </div>
      </main>
    </form>
    <footer>
        <label>Meus contatos:</label>
        <div class="zap">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174879.png" alt="logo zap" class="img-redes">
          <label>(85)9 9132-3179</label>
        </div>
        <div class="insta">
          <img src="https://www.itabirito.mg.leg.br/imagens/insta.png/image" alt="logo insta" class="img-redes">
          <a href="https://www.instagram.com/matheus_fjxj/"target="blank" class="link-insta">Instagram</a>
        </div>
    </footer>
</body>
</html>