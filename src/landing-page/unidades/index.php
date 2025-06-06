<?php
$title = "Unidades - Vivazen";
include "../templates/header.php";
?>
<link rel="stylesheet" href="../assets/css/index.css">
<link rel="stylesheet" href="../assets/css/footer.css">
<link rel="stylesheet" href="../assets/css/header.css">
<link rel="stylesheet" href="../assets/css/unidades.css" />
</head>

<body>
  <?php
  $classeMenu = "out";
  include "../templates/menu.php"
    ?>

  <main>
    <section class="unidades">
      <h2>Nossas Unidades</h2>
      <div class="cards">
        <!-- Unidade 1 -->
        <div class="card ">
          <div class="imagem">
            <img src="../assets/img/Brooklin.png" alt="Fachada da unidade Brooklin" />
          </div>
          <p>
            <strong>Brooklin</strong> <br />Horário: 08h - 18h <br />Dias:
            Segunda a Sábado <br />Contato: (11) 0000-0000
          </p>
          <div class="botoes">
            <a href="#mapaBrooklin" class="botao"><i class="fa-solid fa-map-location-dot"></i> Mapa</a>
            <a href="/login/" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
          </div>
        </div>

        <!-- Unidade 2 -->
        <div class="card ">
          <div class="imagem">
            <img src="../assets/img/Tatuape.png" alt="Fachada da unidade Tatuapé" />
          </div>
          <p>
            <strong>Tatuapé</strong> <br />Horário: 08h - 18h <br />Dias:
            Segunda a Sábado <br />Contato: (11) 0000-0000
          </p>
          <div class="botoes">
            <a href="#mapaTatuape" class="botao"><i class="fa-solid fa-map-location-dot"></i> Mapa</a>
            <a href="#" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
          </div>
        </div>

        <!-- Unidade 3 -->
        <div class="card ">
          <div class="imagem">
            <img src="../assets/img/Capao.png" alt="Fachada da unidade Capão Redondo" />
          </div>
          <p>
            <strong>Capão Redondo</strong> <br />Horário: 08h - 18h
            <br />Dias: Segunda a Sábado <br />Contato: (11) 0000-0000
          </p>
          <div class="botoes">
            <a href="#mapaCapao" class="botao"><i class="fa-solid fa-map-location-dot"></i> Mapa</a>
            <a href="/login/" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Mapas -->
    <section id="mapaBrooklin" class="mapa-opcional">
      <div class="mapa-conteudo">
        <div class="info">
          <h3 class="unidade-nome">Unidade Brooklin</h3>
          <p>
            Localização: Av. Doutor Elias Machado, 966<br />
            Bairro: Itai Bibi<br />
            CEP: 0138-000<br />
            Horário: 08h - 18h<br />
            Contato: (11) 40028-922<br />
          </p>
          <a href="/login/" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
        </div>
        <div class="mapa">
          <a href="https://www.google.com/maps" target="_blank">
            <div class="mapa-box destaque">
              <!--
              <img src="mapaBrooklin.png" alt="Mapa da unidade Brooklin" />
              -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.864594091771!2d-46.68617378450378!3d-23.575747668320243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c219b80cf9%3A0xf351f3d104b1faaa!2sBrooklin%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1616008964180!5m2!1spt-BR!2sbr"
                width="100%" height="280" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section id="mapaTatuape" class="mapa-opcional">
      <div class="mapa-conteudo">
        <div class="info">
          <h3 class="unidade-nome">Unidade Tatuapé</h3>
          <p>
            Localização: Rua Travessa Roque Perez, 1795<br />
            Bairro: Tatuapé<br />
            CEP: 3685-000<br />
            Horário: 08h - 18h<br />
            Contato: (11) 2185-2027<br />
          </p>
          <a href="#" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
        </div>
        <div class="mapa">
          <a href="https://www.google.com/maps" target="_blank">
            <div class="mapa-box destaque">
              <!--
              <img src="mapaTatuape.png" alt="Mapa da unidade Tatuapé" />
              -->

              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14631.743357907186!2d-46.583909907763676!3d-23.534809963250723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee7acdd50f5%3A0x3eeaf24eff368507!2zVGF0dWFww6ksIFPDo28gUGF1bG8gLSBTUA!5e0!3m2!1spt-BR!2sbr!4v1744679178180!5m2!1spt-BR!2sbr"
                width="100%" height="280" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section id="mapaCapao" class="mapa-opcional">
      <div class="mapa-conteudo">
        <div class="info">
          <h3 class="unidade-nome">Unidade Capão Redondo</h3>
          <p>
            Localização: Rua Laudelino Luz, 1918<br />
            Bairro: Jardim Itaoca<br />
            CEP: 9688-000<br />
            Horário: 08h - 18h<br />
            Contato: (11) 7718-6247<br />
          </p>
          <a href="#" class="botao agendar"><i class="fa-solid fa-calendar-check"></i> Agendar</a>
        </div>
        <div class="mapa">
          <a href="https://www.google.com/maps" target="_blank">
            <div class="mapa-box destaque">
              <!--
              <img src="mapaCapao.png" alt="Mapa da unidade Capão Redondo" />
            -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12291.285722816463!2d-46.77849977046808!3d-23.668049583371232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce53b5b3a12aa9%3A0xff40d03fdffd625c!2sCap%C3%A3o%20Redondo%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1spt-BR!2sbr!4v1744674059255!5m2!1spt-BR!2sbr"
                width="100%" height="280" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php include "../templates/footer.php" ?>