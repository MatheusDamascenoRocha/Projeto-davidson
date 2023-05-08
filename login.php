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
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/carrossel.css">
    <link rel="shortcut icon" href="img/engrenagem.png" type="image/x-icon">
    <style>
        .main{
            background-image:url(img/mecanico-fundo.png); 
        }
    </style>
  </head>
<body>
<div id="area-1">
<header>
      <div class="header-logo">
        <img src="img/logo.png" alt="logo" class="logo">
        <h1><em>Up-Driver</em></h1>
      </div>
      <div class="navbar">
        <a href="#area-1">Login</a>
        <a href="#area-2">Habilidades</a>
        <a href="#area-3">Quem somos</a>
        <a href="#area-4">Marcas</a>
        <a href="#area-5">Informações</a>
      </div>
    </header>
  <div class="main">


    <!--LOGIN!!!!!!!!!!!!!!! -->
        
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
        
                        <button class="logar">Logar</button>
                       <h3 style="color: white; margin-top: 2rem;">Não possui conta?   <a href="cadastro.php" class="link-cadastrar">Criar</a></h3>
                </form>
            </div>
        </div>
  </div>


  <!--CONTAINER DE HABILIDADES!!!!!!!!! -->
    <div class="container">
      <div id="area-2" data-anime>
        <div class="card" onmouseover="this.<img src='img/estrela-escura.png>'">
          <img src="img/estrela.png"><br>
          <span class="titulo">Garantia e Qualidade</span>
          <P>Oferecemos garantia e procedência para peças e serviços.</P>
    </div>
        <div class="card">
          <img src="img/ferramenta.png"><br>
          <span class="titulo">Equipamentos</span>
          <P>De última geração e atualizados, operados <br>por equipe altamente capacitada e certificada.</P>
    </div>
        <div class="card">
          <img src="img/rigging.png"><br>
          <span class="titulo">Estrutura</span>
          <P>Contamos com um espaço estruturado para o melhor atendimento.</P>
        </div>
        <div class="card">
          <img src="img/xicara-de-cafe.png"><br>
          <span class="titulo">Sala de Espera</span>
          <P class="xicara-texto">Usufrua de nossa aconchegante sala de espera e comodidades, enquanto aguarda a liberação de seu veículo.</P>
        </div>
      </div>
    </div>
  <!--ACABACONTAINER DE HABILIDADES!!!!!!!!! -->


  <div id="area-3">
      <div class="conteudo-sobre-nos">
        <img src="img/hand.png" id="mao-ferramenta-esquerda" data-anime>
        <div class="sobre-nos" data-anime>
                    <h2>Quem somos</h2>
                    <p>A Oficina Up-Driver completou 49 anos de existência.
        
                  Desde 1973, trabalhamos com profissionais capacitados para formar uma equipe qualificada e responsável. Dessa forma, não só garantimos a máxima segurança do seu veículo como também os melhores serviços para ele.
        
                  Constantemente, nossos colaboradores passam por treinamentos, participam de conferências, palestras, cursos de Ensino à Distância (EAD) ou presenciais, entre outras formas de desenvolvimento pessoal e profissional.</p>
        </div>
        <img src="img/mecanicos.jpg" class="img-sobre-nos" data-anime>
        <img src="img/hand.png" id="mao-ferramenta-direita" data-anime>
      </div>
  </div>


    <!--SLIDER MARCAS!!!!!!!!!!!!!!!!-->
    <div id="area-4">
      <div class="carrossel" data-anime>
        <h1>Marcas</h1>
        <h3>Trabalhamos com multimarcas</h3>
        <div class="slider">
          <button class="arrow-left control" aria-label="Previous image">◀</button>
          <button class="arrow-right control" aria-label="Next image">▶</button>
          <div class="marcas-wrapper">
              <div class="marcas">
                  <img src="img/citroen.png"
                  class="item current-item">
                  <img src="img/fiat.png"
                  class="item">
                  <img src="img/ford.png"
                  class="item">
                  <img src="img/honda.png"
                  class="item">
                  <img src="img/hyundai.png"
                  class="item">
                  <img src="img/mitsubishi.png"
                  class="item">
                  <img src="img/nissan.png"
                  class="item">
                  <img src="img/peugeot.png"
                  class="item">
                  <img src="img/suzuki.png"
                  class="item">
                  <img src="img/volkswagen.png"
                  class="item">
              </div>
          </div>
      </div>
      </div>
    </div>


    <!--FOOTER COM COPYRIGHT!!!!!!!!!!! -->
    <footer id="area-5">
      <div class="coluna coluna-1" data-anime>
        <h2 class="titulo-footer"><i>Navegue</i></h2>
        <hr id="linha-1">
        <ul type="none" class="lista">
          <a href="#area-1">
            <li class="item-lista">Login</li>
          </a>
          <a href="#area-2">
            <li class="item-lista">Habilidades</li>
          </a>
          <a href="#area-3">
            <li class="item-lista">Quem somos</li>
          </a>
          <a href="login.php#area-4">
            <li class="item-lista">Marcas</li>
          </a>
          <a href="login.php#area-5">
            <li class="item-lista">Informações</li>
          </a>
        </ul>
      </div>
      <div class="coluna coluna-3" data-anime>
        <h2 class="titulo-footer"><i>Localização</i></h2>
        <hr id="linha-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7962.769899685766!2d-38.515716!3d-3.72596!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7484543a91385%3A0x2444014a15cde1fa!2sR.%20Nogueira%20Acioli%2C%20234%20-%20Centro%2C%20Fortaleza%20-%20CE%2C%2060110-140!5e0!3m2!1spt-BR!2sbr!4v1682646534628!5m2!1spt-BR!2sbr" width="320" height="300" style="border:0; border-radius:10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="coluna coluna-2" data-anime>
        <h2 class="titulo-footer"><i>Contato</i></h2>
        <hr id="linha-2">
        <div class="contatos">
          <img src="img/loc.png">
          <div class="txtContatos">
                <h3>Vá para:</h3>
                <p>Rua Nogueira Acioli, 234,<br> Centro, Fortaleza-CE</p>
              </div>
            </div>
            <div class="contatos">
              <img src="img/telefone.png">
              <div class="txtContatos">
                <h3>Ligue para:</h3>
                <p>(85) 9 98876-4948 <br>
                (85) 9 99756-4948</p>
              </div>
            </div>
            <div class="contatos">
              <img src="img/email.png">
              <div class="txtContatos">
                <h3>Envie um email para:</h3>
                <p>up_driver@gmail.com</p>
              </div>
            </div>
            <div class="redes-sociais">
                <a href="https://www.instagram.com/matheus_fjxj/"  target="_blank" ><img class="icone-redes" src="img/instagram.png"></a>
                <a href="https://api.whatsapp.com/send?phone=5585988719784&text=Ol%C3%A1%21+estou+na+oficina+Up-Driver+e+gostaria+de+mais+informa%C3%A7%C3%B5es." target="_blank" rel="noreferrer noopener"  ><img class="icone-redes" src="img/whatsapp.png"></a>
              </div>
          </div>
        </div>
      </footer>
      <div class="direitos-autorais">
            <p>Copyright © 2023 - Up-Driver - Todos os Direitos Reservados</p>
        </div>

    <!--SCRIPTS!!!!!-->
<script src="js/animacao.js"></script> <!--ANIMAÇÃO SCROLL-->
<script src="js/carrossel.js"></script> <!--SLIDER-->
</body>
</html>
