<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-style.css">
    <link rel="icon" href="img/urano.png" type="image/png">
    <title>Cadastro</title>
</head>
<body>
    <form action="recebe.php" method="post">
      <main>
          <h1 class="titulo"><em>Se cadastre no nosso site!</em></h1>
        <div class="card">
            <input type="text" placeholder="User" class="cadastro" name="usuario"><br>
            <input type="password" placeholder="Password" class="cadastro" name="senha"><br>
            <input type="email" placeholder="E-mail" class="cadastro" name="email"><br>
            <input type="text" placeholder="CPF" class="cadastro" name="cpf" \ pattern="d{3}\.?d{3}\.?d{3}-?\d{2}" \>
              <div class="botoes">
                <button class="botao">Cadastrar-se</button>
            </div>
        </div>
      </main>
    </form>
</body>
</html>