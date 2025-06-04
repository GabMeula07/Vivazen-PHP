<?php
$title = "Vivazen";
include 'templates/header.php';
?>
<link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>
    <?php include 'templates/menu.php' ?>
    <section class="container-home">
        <div>
            <h1>Sua Saúde, Nossa Prioridade.</h1>
            <p>
                Encontre o plano perfeito para você e sua família.
                Cuidar da sua saúde nunca foi tão fácil. Conheça nossos
                planos e cuide do seu bem mais valioso!
            </p>
        </div>
        <button>Conhecer nossos planos</button>
    </section>

    <section class="benef">
        <h2 class="fade-element">Vantagens Exclusivas</h2>
        <div class="container_benef">
            <div class="fade-element d1 card">
                <i class="fa-solid fa-calendar-days fa-2xl" style="color: #388e3c;"></i>
                <h3>Agendamento 24 Horas</h3>
            </div>
            <div class="fade-element d2 card">
                <i class="fa-solid fa-stethoscope fa-2xl" style="color: #388e3c;"></i>
                <h3>+40 Especialidades</h3>
            </div>
            <div class="fade-element d3 card">
                <i class="fa-solid fa-notes-medical fa-2xl" style="color: #388e3c;"></i>
                <h3>Protuário Universal</h3>


            </div>
            <div class="fade-element d4 card">
                <i class="fa-solid fa-brain fa-2xl" style="color: #388e3c;"></i>
                <h3>Atendimento Psicológico</h3>
            </div>
        </div>
    </section>

    <section class="desc">
        <div>
            <h3 class="fade-element left ">Onde a saúde de um é a saúde de <span>todos</span></h3>
            <p class="fade-element left ">A VivaZen é um clínica criada em 2018 para atender as necessidades dos
                consumidores de possuir um plano
                médico de custo benefício. Buscamos sempre atualizações acerca de técnicas, tratamentos e equipamentos
                de
                alta tecnologia. A instituição sempre foi referência em seus serviços de atendimento e instalações
                modernas
                muito bem distribuídas. Vivazen é a maior incentivadora de campanhas como a AIDS, Influenza, HPV e
                câncer de
                mama.
            </p>
        </div>
        <img class="fade-element right" src=".\assets\img\artesobre.png" alt="">
    </section>

    <?php
    include 'templates/footer.php';

    ?>