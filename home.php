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
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body>
  <?php include'./header.php'; ?>
    <main>
      <form action="recebe-servico.php" method="post">
        <div class="bloco">
          <h2 class="titulo">SUAS INFORMAÇÕES</h1>
          <div class="inputs">
            <div class="caixa__login-input">
              <input type="text" name="nome" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Matheus':null);"
              onblur="javascript:(this.placeholder=='Ex: Matheus'?this.placeholder = '':null);" required />
              <label>Nome</label>
                  </div>
                  <div class="caixa__login-input">
              <input type="text" name="cpf" id="cpf" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: 123-456-789-10':null);"
              onblur="javascript:(this.placeholder=='Ex: 123-456-789-10'?this.placeholder = '':null);" required />
              <label>CPF</label>
                  </div>
                  <div class="caixa__login-input">
              <input type="text" name="telefone" id="telefone" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: 85 99132-3179':null);"
              onblur="javascript:(this.placeholder=='Ex: 85 99132-3179'?this.placeholder = '':null);" required />
              <label>Telefone</label>
                  </div>
        </div>
        <div class="bloco">
          <h2 class="titulo">CARRO</h1>
          <div class="inputs">
            <div class="caixa__login-input">
                <input type="text" name="marca" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Fiat':null);"
                onblur="javascript:(this.placeholder=='Ex: Fiat'?this.placeholder = '':null);" required />
                <label>Marca</label>
            </div>
            <div class="caixa__login-input">
                <input type="text" name="modelo" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: uno':null);"
                onblur="javascript:(this.placeholder=='Ex: uno'?this.placeholder = '':null);" required />
                <label>Modelo</label>
            </div>
            <div class="caixa__login-input">
                <input type="text" name="placa" id="placa" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: FFF-1234':null);"
                onblur="javascript:(this.placeholder=='Ex: FFF-1234'?this.placeholder = '':null);" required />
                <label>Placa</label>
            </div>
          </div>
        </div>
        <div class="bloco">
          <h2 class="titulo">SERVIÇO</h1>
          <div class="inputs">
            <div class="caixa__login-input">
                <input type="text" name="servico" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: Troca de aro':null);"
                onblur="javascript:(this.placeholder=='Ex: Troca de aro'?this.placeholder = '':null);" required />
                <label>Qual o serviço?</label>
            </div>
            <div class="caixa__login-input">
              <input type="text" name="data" id="data" onfocus="javascript:(this.placeholder==''?this.placeholder = 'Ex: 29/06/2023':null);"
              onblur="javascript:(this.placeholder=='Ex: 29/06/2023'?this.placeholder = '':null);" required />
              <label>Que data?</label>
            </div>
            <div class="select">
              <select name="funcionarios">
                <option disabled selected>Funcionarios</option>
                <option value="rosangela">Rosangela</option>
                <option value="elisangela">Elisangela</option>
                <option value="gleyciane">Gleyciane</option>
              </select>
            </div>
        </div>
        <div class="botao">
          <button>MARCAR</button>
        </div>
      </form>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#cpf");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
</script>

<script>
      $(document).ready(function () { 
        var $seuCampoTel = $("#telefone");
        $seuCampoTel.mask('00 00000-0000', {reverse: true});
    });
</script>

<script>
      $(document).ready(function () { 
        var $seuCampoData = $("#data");
        $seuCampoData.mask('00/00/0000', {reverse: true});
    });
</script>
</body>
</html>
