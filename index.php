<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>High School</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</head>

<body>

</body>
<section id="bg">
  <div class="container">
    <div class="title">
      <h1>High School</h1>
      <h3>EDUCAR COM AMOR</h3>
    </div>
    <div class="buttons" id="home">
      <button onclick="login()" id="btn-login">ENTRAR</button>
      <button onclick="recovery()" id="btn-recovery">RECUPERAR SENHA</button>
    </div>
    <div class="buttons disable" id="login">
      <input type="text" id="matricula" placeholder="Matrícula" autcomplete="off" />
      <input type="text" id="senha" placeholder="Senha" style="margin-bottom: 30px" autcomplete="off" />
      <button id="btn-login">ENTRAR</button>
      <button onclick="voltar()">Voltar</button>
    </div>
    <div class="buttons disable" id="password">
      <input type="text" id="matricula-recovery" placeholder="Matrícula" autcomplete="off" style="margin-bottom: 30px" />
      <button id="btn-login">RECUPERAR SENHA</button>
      <button onclick="voltar()">Voltar</button>
    </div>
  </div>
</section>

</html>