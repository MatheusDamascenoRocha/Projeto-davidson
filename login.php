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
        .main{
            background-image:url(img/mecanico-fundo.png); 
        }
    </style>
  </head>
<body>
  <div class="main">
      <div class="area-1">
        <div class="conteudo-l">
          <div class="sobre-nos">
            <h2>Sobre nós</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam enim facere pariatur consequatur voluptas temporibus atque quibusdam quaerat laborum sequi doloribus possimus dicta quo soluta, illum inventore fuga! Porro, magni?Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit aliquam autem saepe dolorem. Molestias ipsam nulla illo, ullam, magni nihil architecto labore dolores quaerat eveniet accusantium reiciendis quis. Quas, dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ex temporibus, harum adipisci fuga beatae perferendis earum obcaecati, dolorem pariatur amet sapiente blanditiis! Vitae veniam, vel nemo porro nulla itaque.</p>
          </div>
        </div>
        <div class="conteudo-r">
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
        </div>
      </div>
  </div>
  <div class="secundario">
    <div class="container">
      <div class="area-2">
        <div class="card">
          <img src="img/estrela.png"><br>
          <span class="titulo">Garantia e Qualidade</span>
          <P>Oferecemos garantia e procedência para peças e serviços.</P>
    </div>
        <div class="card">
          <img src="img/ferramentas.png"><br>
          <span class="titulo">Equipamentos</span>
          <P>De última geração e atualizados, operados por equipe altamente capacitada e certificada.</P>
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
  </div>
</body>
</html>