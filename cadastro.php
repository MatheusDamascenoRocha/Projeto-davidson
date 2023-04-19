<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-style.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <title>Cadastro</title>
    <style>
        body{
            background-image: radial-gradient( #053a76,#031C38); 
        }
    </style>
</head>
<body>
<main>
      <div class="caixa__login">
            <h2>Cadastro</h2>
            <form action="recebe-cadastro.php" method="post">
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
                    <div class="caixa__login-input">
                        <input type="email" name="email" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: algumacoisa@gmail.com':null);"
onblur="javascript:(this.placeholder=='Ex: algumacoisa@gmail.com'?this.placeholder = '':null);" required />
                        <label>Email</label>
                    </div>
                    <div class="caixa__login-input">
                        <input type="text" name="cpf" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: 123.456.789-10':null);"
onblur="javascript:(this.placeholder=='Ex: 123.456.789-10'?this.placeholder = '':null);" required />
                        <label>CPF</label>
                    </div>
                </div>
      
                    <button>Cadastrar</button>
            </form>
        </div>
  </main>
  <footer>
    <h3 style="color:rgba(255,255,255,0.50)">Copyright &copy; - Up-Driver - Todos os Direitos Reservados</h3>
  </footer> 
</body>
</html>