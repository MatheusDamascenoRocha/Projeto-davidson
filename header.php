<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      header{
    width: 100vw;
    height: 8vh;
    background-color: #031C38;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0px 2px 20px 5px rgba(0, 0, 0, 0.411);
    font-family: "Poppins", sans-serif;
    position: fixed;
    z-index: 1;
}
.header-logo{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 30px;
}
.header-logo > h1{
    color: aliceblue;
    font-size: 3rem;
}
.logo {
    width: 6vw;
    height: 8vh;
}
.navbar{
    margin-right: 50px;
}
.navbar > a{
    color: aliceblue;
    font-size: 1.6rem;
    padding: 10px 13px;
}
.navbar > a:hover{
    transition: 0.8s;
    color: #031C38;
    background-color: aliceblue;
    border-radius: 5px;
}
    </style>
</head>
<body>
    <header>
        <div class="header-logo">
          <img src="img/logo.png" alt="logo" class="logo">
          <h1><em>Up-Driver</em></h1>
        </div>
        <div class="navbar">
          <a href="#">Serviços</a>
          <a href="#">Cadastro</a>
          <a href="#">Excluir</a>
          <a href="?sair">Sair</a>
        </div>
      </header>
</body>
</html>