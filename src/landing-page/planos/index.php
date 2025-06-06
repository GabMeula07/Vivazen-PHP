<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="../assets/img/logo.png" />
  <link rel="stylesheet" href="../assets/css/index.css" />
  <link rel="stylesheet" href="../assets/css/header.css" />
  <link rel="stylesheet" href="../assets/css/footer.css" />

  <link rel="stylesheet" href="../assets/css/planos.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>VivaZen</title>
</head>

<body>
  <?php
  $classeMenu = "out";
  include "../templates/menu.php"
    ?>
  <main>
    <div class="carousel-container">
      <div class="carousel">
        <div class="carousel-slide">
          <img src="../assets/img/Planos do site[1]/1.png" alt="" />
        </div>
        <div class="carousel-slide">
          <img src="../assets/img/Planos do site[1]/2.png" alt="" />
        </div>
        <div class="carousel-slide">
          <img src="../assets/img/Planos do site[1]/3.png" alt="" />
        </div>
        <div class="carousel-slide">
          <img src="../assets/img/Planos do site[1]/4.png" alt="" />
        </div>
      </div>
      <div class="dots-container">
        <span class="dot active" data-index="0"></span>
        <span class="dot" data-index="1"></span>
        <span class="dot" data-index="2"></span>
        <span class="dot" data-index="3"></span>
      </div>
  </main>

  <section>
    <div class="container">
      <h1>Planos de Saúde VivaZen</h1>
      <p>Cuide da sua saúde com qualidade e economia</p>

      <div class="plans">

        <div class="plan-card">
          <h2>Plano Green</h2>
          <img src="../assets/img/Cartãos da clínica[1]/1.png" alt="">

          <div class="plan-description">
            Ideal para quem quer o básico com segurança e preço acessível.
          </div>
          <div class="features">
            <p><i class="fas fa-user-md"></i> Consultas ilimitadas</p>
            <p><i class="fas fa-vials"></i> Exames laboratoriais</p>
            <p><i class="fas fa-clinic-medical"></i> Atendimento clínico geral</p>
            <p><i class="fas fa-briefcase-medical"></i> Pronto atendimento 24h</p>
            <p><i class="fas fa-heartbeat"></i> Monitoramento de saúde</p>
          </div>
          <button class="btn">Falar com Vendedor</button>
        </div>


        <div class="plan-card">
          <h2>Plano Green PRO+</h2>
          <img src="../assets/img/Cartãos da clínica[1]/2.png" alt="">
          <div class="plan-description">
            Completo para quem busca atendimento personalizado e benefícios exclusivos.
          </div>
          <div class="features">
            <p><i class="fas fa-user-md"></i> Consultas com especialistas</p>
            <p><i class="fas fa-vials"></i> Exames de imagem incluídos</p>
            <p><i class="fas fa-heart"></i> Check-up anual completo</p>
            <p><i class="fas fa-baby"></i> Atendimento pediátrico</p>
            <p><i class="fas fa-hospital-user"></i> Internações programadas</p>
            <p><i class="fas fa-spa"></i> Massoterapia Gratuita</p>
            <p><i class="fas fa-brain"></i> Psicoterapia Inclusa</p>


          </div>
          <button class="btn">Falar com Vendedor</button>
        </div>
      </div>
    </div>
  </section>
  <script src="../assets/js/carousel.js"></script>
  <script>
    function toggleMenu(button) {
      const nav = document.querySelector('.mobile-nav');
      button.classList.toggle('opened');
      nav.classList.toggle('active');
      button.setAttribute('aria-expanded', button.classList.contains('opened'));
    }
  </script>

  <?php include "../templates/footer.php" ?>