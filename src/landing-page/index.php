<?php
$title = "Vivazen";
include 'templates/header.php';
?>
<link rel="stylesheet" href="./assets/css/index.css">
<link rel="stylesheet" href="./assets/css/footer.css">
<link rel="stylesheet" href="./assets/css/header.css">
<link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>
    <header class="<?php echo isset($classeMenu) ? $classeMenu : ' ' ?>" />
    <a href="/">
        <img src="./assets/img/logo2.png" alt="" class="logo" />
    </a>
    <nav>
        <a class="link-header" href="/landing-page/unidades/">Unidades</a>
        <a class="link-header" href="/landing-page/campanhas/">Campanhas</a>
        <a class="link-header" href="/landing-page/planos/">Planos</a>
        <a class="entrar" href="/login/">Entrar</a>
    </nav>
    <button class="menu" onclick="toggleMenu(this)">
        <svg width="100" height="100" viewBox="0 0 100 100">
            <path class="line line1"
                d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3"
                d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>

    <nav class="mobile-nav">
        <ul>
            <li><a href="/landing-page/unidades/">Unidades</a></li>
            <li><a href="/landing-page/campanhas/">Campanhas</a></li>
            <li><a href="/landing-page/planos/">Planos</a></li>
            <li><a href="/login/">Entrar</a></li>
        </ul>
    </nav>
    </header>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-element");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                        } else {
                            entry.target.classList.remove("visible");
                        }
                    });
                },
                {
                    threshold: 0.2,
                    rootMargin: "0px",
                }
            );

            elements.forEach((el) => {
                observer.observe(el);
            });
        });

        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("out", window.scrollY > 0);
        });

    </script>
    <?php
    include 'templates/footer.php';

    ?>