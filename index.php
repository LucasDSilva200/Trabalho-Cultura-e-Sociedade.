<?php

  function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
  }
  $ipaddress=get_client_ip();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=-100, maximum-scale=1, user-scalable=no"
    />
    <!--Ligação com o css 'style.css'-->
    <link rel="stylesheet" href="assets/css/style.css" />
    <meta charset="UTF-8" />
    <title>Combate a desinformação</title>
  </head>

  <body>
    <!--Início do menu-->
    <header>
      <nav>
        <a class="logo" href="#">Combate a Desinformação</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li><a href="fakenews.html">Fake news?</a></li>
          <li><a href="identificar.html">identificando</a></li>
          <li><a href="combater.html">Combater</a></li>
          <li><a href="sociedade.html">Sociedade</a></li>
          <li><a href="denunciar.html">Denuncias</a></li>
        </ul>
      </nav>
    </header>
    <!--Finalização de menu-->
    <!--Corpo da página-->
    <main>
      <text
        style="
          fill: #000000;
          font-size: 14;
          font-size-adjust: 0.399816;
          stroke-width: 0;
        "
      >
        <tspan
          style="
            letter-spacing: 0;
            word-spacing: 0;
            kerning: 0;
            font-size: 18;
            font-size-adjust: 0.399816;
            text-align: justify;
            font-stretch: 100;
          "
          x="0"
        >
          * * *<br />
        </tspan>
        <tspan x="0" dy="15.75pt">
          <div class="content">
            <h1>COMBATE A FAKE NEWS</h1>
            <br />
            <p>
              Olá a todos! Sejam bem-vindos ao nosso site dedicado ao combate às
              fake news e à promoção de informações confiáveis. Neste momento em
              que a disseminação de notícias falsas se tornou um desafio global,
              estamos aqui para fornecer recursos valiosos e confiáveis para
              ajudá-lo a distinguir fatos de boatos.
            </p>
          </div>
        </tspan>
      </text>
    </main>
    <!--Fim do corpo da página-->
    <footer>
      <div class="footer-title">
        <h2>Projeto de extenção - Faculdade IBPTECH</h2>
      </div>
      <div class="div-participantes">
        <h4>Participantes:</h4>
        <ul>
          <li>Lucas Gabriel da Silva</li>
          <li>Priscila Donaire Brasil Cabral</li>
          <li>Priscila Kaylane dos Santos Costa</li>
          <li>Vinicius de Machado Cabral</li>
        </ul>
      </div>
    </footer>

    <!--Ligação com o javascript reponsável pela responsividade do menu para telas menores-->
    <script src="assets/js/mobile-navbar.js"></script>
  </body>
</html>
<?php
  $iplist = "iplist.txt";
  $file = fopen($iplist,'a');
  if($file){
    $conteudo = "Internauta: '$ipaddress'\n"; // O conteúdo que você deseja escrever

    // Escreva o conteúdo no arquivo
    fwrite($file, $conteudo);

    // Feche o arquivo
    fclose($arquivo);
    echo "O arquivo '$iplist' foi criado e o conteúdo foi escrito com sucesso.";

  }
  else {
    echo "Não foi possível abrir o arquivo '$iplist'. Verifique as permissões.";
  }

?>
