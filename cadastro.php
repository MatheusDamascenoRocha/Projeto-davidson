<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro-style.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <title>Up-Driver</title>
    <style>
        html{
            background: linear-gradient(75.13deg, #022758 50%, #1a68ce 50.01%); 
        }
    </style>
</head>
<body>
    
<main>
<a class="voltar" href="login.php">
    <img src="img/arrow.png">
    <label>VOLTAR</label>
</a>
        <div class="conteudo">
            <div class="escolher">
                <h1 class="titulo-lista"><i>Por que nos escolher?</i></h1>
                <ul class="lista" type="none">
                    <li class="item-lista">
                        <h2>A qualidade do nosso suporte é incomparável</h2>
                        <p class="texto-lista">Buscamos oferecer um suporte mais personalizado, levando em consideração seu conhecimento, expectativas e personalidade.</p>
                    </li>
                    <li class="item-lista">
                        <h2>Somos apaixonados pelo que fazemos</h2>
                        <p class="texto-lista">O que nos diferencia da concorrência é que somos apaixonados pelos produtos/serviços que oferecemos, além da qualidade do nosso suporte.</p>
                    </li>
                    <li class="item-lista">
                        <h2>Experiência comprovada</h2>
                        <p class="texto-lista">Conquistamos a reputação de empresa confiável e séria, obtendo grande parte dos nossos clientes provenientes de indicações.</p>
                    </li>
                </ul>
            </div>
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
                        <button class="logar">Cadastrar</button>
                </form>
            </div>
        </div>
  </main>
  <footer>
    <h3 style="color:rgba(255,255,255,0.70)">Copyright © 2023 - Up-Driver - Todos os Direitos Reservados</h3>
  </footer> 
</body>
</html>
