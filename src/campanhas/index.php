<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campanhas Vivaven</title>
    <!-- Montserrat Google Fonts -->

    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/campanhas.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <?php
    $classeMenu = "out";
    include "../templates/menu.php"
        ?>
    <section class="apresentacao fade-element left">
        <h2>Bem-vindo às Campanhas Vivazem!</h2>
        <p>
            Oferecemos atendimento humanizado e campanhas especiais para cuidar da sua saúde e bem-estar.<br>
            Confira abaixo os horários de campanha e saiba como participar.
        </p>
        <div class="info">
            <div>
                <strong>Horário de Funcionamento:</strong><br>
                Segunda a Sexta: 7h às 19h<br>
                Sábado: 8h às 13h
            </div>
            <div>
                <strong>Como Usufruir das Campanhas:</strong><br>
                1. Escolha a campanha de interesse.<br>
                2. Clique em "Saiba mais" para detalhes.<br>
                3. Agende seu atendimento pelo telefone ou presencialmente.<br>
                4. Apresente o nome da campanha no momento do atendimento.
            </div>
        </div>
    </section>
    <div class="container fade-element right">
        <div class="campanhas" id="campanhas">
            <!-- Campanhas serão inseridas aqui -->
        </div>

    </div>
    <!-- Modal -->
    <div class="modal-bg" id="modal-bg">
        <div class="modal" id="modal">
            <button class="close-modal" onclick="fecharModal()">&times;</button>
            <img id="modal-img" src="" alt="">
            <h3 id="modal-titulo"></h3>
            <p id="modal-descricao"></p>
            <p id="modal-detalhes" style="font-size:0.98rem; color:var(--deep-green);"></p>
        </div>
    </div>


    <script>
        // Campanhas iniciais
        const campanhas = [
            {
                titulo: "Check-up Completo com Desconto",
                descricao: "Aproveite nosso check-up completo com 20% de desconto durante o mês de junho!",
                detalhes: "Inclui exames laboratoriais, avaliação clínica e orientações personalizadas. Válido para agendamentos realizados até 30/06.",
                imagem: "https://placehold.co/220x120/2e7d32/fff?text=Check-up"
            },
            {
                titulo: "Vacinação contra a Gripe",
                descricao: "Campanha de vacinação aberta para todas as idades. Proteja-se e proteja sua família.",
                detalhes: "Vacinas disponíveis enquanto durarem os estoques. Não é necessário agendamento prévio.",
                imagem: "https://placehold.co/220x120/388e3c/fff?text=Vacinação"
            },
            {
                titulo: "Avaliação Nutricional Gratuita",
                descricao: "Agende sua avaliação nutricional sem custo durante a campanha de inverno.",
                detalhes: "Vagas limitadas. Atendimento com nutricionista especializado. Agende pelo telefone (11) 99999-9999.",
                imagem: "https://placehold.co/220x120/a8e6a3/232826?text=Nutrição"
            },
            {
                titulo: "Consulta Odontológica Preventiva",
                descricao: "Faça sua consulta odontológica preventiva com preço especial neste mês.",
                detalhes: "Inclui avaliação, limpeza e orientações de higiene bucal. Promoção válida até 30/06.",
                imagem: "https://placehold.co/220x120/81c784/232826?text=Odonto"
            },
            {
                titulo: "Exame de Vista Gratuito",
                descricao: "Participe da campanha de saúde ocular e faça seu exame de vista gratuitamente.",
                detalhes: "Exames realizados por profissionais especializados. Vagas limitadas por ordem de chegada.",
                imagem: "https://placehold.co/220x120/4caf50/fff?text=Oftalmo"
            },
            {
                titulo: "Acompanhamento Pré-natal Especial",
                descricao: "Pacote especial para gestantes com acompanhamento completo e descontos exclusivos.",
                detalhes: "Inclui consultas, exames e orientações. Válido para novas pacientes que iniciarem o pré-natal em junho.",
                imagem: "https://placehold.co/220x120/a8e6a3/388e3c?text=Pré-natal"
            },
            {
                titulo: "Semana da Saúde Mental",
                descricao: "Atendimentos psicológicos com valores reduzidos durante a semana da saúde mental.",
                detalhes: "Consultas individuais ou em grupo. Agende pelo WhatsApp ou presencialmente.",
                imagem: "https://placehold.co/220x120/66bb6a/232826?text=Psicologia"
            },
            {
                titulo: "Campanha de Doação de Sangue",
                descricao: "Doe sangue e ajude a salvar vidas! Participe da nossa campanha solidária.",
                detalhes: "Todos os doadores recebem um brinde especial. Consulte os requisitos para doação.",
                imagem: "https://placehold.co/220x120/43a047/fff?text=Doação"
            },
            {
                titulo: "Avaliação Fisioterapêutica Gratuita",
                descricao: "Faça uma avaliação fisioterapêutica sem custo durante o mês de junho.",
                detalhes: "Indicado para todas as idades. Agendamento obrigatório pelo telefone da clínica.",
                imagem: "https://placehold.co/220x120/8bc34a/232826?text=Fisioterapia"
            }
        ];

        function renderizarCampanhas() {
            const container = document.getElementById('campanhas');
            container.innerHTML = '';
            campanhas.forEach((campanha, idx) => {
                container.innerHTML += `
          <div class="campanha fade-element">
            <img src="${campanha.imagem}" alt="${campanha.titulo}">
            <h3>${campanha.titulo}</h3>
            <p>${campanha.descricao}</p>
            <button class="saiba-mais-btn" onclick="abrirModal(${idx})">Saiba mais</button>
          </div>
        `;
            });
            aplicarFade();
        }

        function abrirModal(idx) {
            const campanha = campanhas[idx];
            document.getElementById('modal-img').src = campanha.imagem;
            document.getElementById('modal-img').alt = campanha.titulo;
            document.getElementById('modal-titulo').textContent = campanha.titulo;
            document.getElementById('modal-descricao').textContent = campanha.descricao;
            document.getElementById('modal-detalhes').textContent = campanha.detalhes || '';
            document.getElementById('modal-bg').style.display = 'flex';
        }

        function fecharModal() {
            document.getElementById('modal-bg').style.display = 'none';
        }

        // Fecha modal ao clicar fora
        document.getElementById('modal-bg').addEventListener('click', function (e) {
            if (e.target === this) fecharModal();
        });

        function adicionarCampanha() {
            const titulo = prompt("Título da campanha:");
            if (!titulo) return;
            const descricao = prompt("Descrição resumida da campanha:");
            if (!descricao) return;
            const detalhes = prompt("Detalhes completos (opcional):") || "";
            const imagem = prompt("URL da imagem (ou deixe em branco para usar padrão):");
            campanhas.push({
                titulo,
                descricao,
                detalhes,
                imagem: imagem || "https://placehold.co/220x120/a8e6a3/232826?text=Campanha"
            });
            renderizarCampanhas();
        }

        // Fade effect ao rolar
        function aplicarFade() {
            const fadeElements = document.querySelectorAll('.fade-element');
            const ativarFade = () => {
                fadeElements.forEach(el => {
                    const rect = el.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 60) {
                        el.classList.add('visible');
                    }
                });
            };
            ativarFade();
            window.addEventListener('scroll', ativarFade);
        }

        // Inicializa a página
        renderizarCampanhas();
        // Fade inicial
        window.addEventListener('DOMContentLoaded', aplicarFade);
    </script>


    <?php include "../templates/footer.php" ?>