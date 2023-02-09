<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
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
            <form>
                <div class="inputs">
                    <div class="caixa__login-input">
                        <input type="text" required />
                        <label>User</label>
                    </div>
                    <div class="caixa__login-input">
                        <input type="password" required />
                        <label>Senha</label>
                    </div>
                </div>
      
                    <button>Login</button>
                   <h3 style="color: white; margin-top: 2rem;">Não possui conta?   <a href="cadastro.php" class="link-cadastrar">Criar</a></h3>
            </form>
        </div>
  </main>
  <footer>
    <h3 style="color:rgba(255,255,255,0.50)">Copyright &copy; - Up-Driver - Todos os Direitos Reservados</h3>
  </footer> 
</body>
</html>