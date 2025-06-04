<footer>
    <div class="container-footer">
        <div class="info-footer">
            <h4>Unidade Brooklin</h4>
            <p>Av. Doutor Elias Machado, 966</p>
            <p>Telefone: (11) 9875-6937</p>
            <p>Email: atendimento.brooklin@vivazen.com</p>
        </div>
        <div class="info-footer">
            <h4>Unidade Tatuapé</h4>
            <p>Rua Travessa Roque Perez, 1795</p>
            <p>Telefone: (11) 2185-2027</p>
            <p>Email: atendimento.tatuape@vivazen.com</p>

        </div>
        <div class="info-footer">
            <h4>Unidade Capão</h4>
            <p>Rua Laudelino Luz, 1918</p>
            <p>Telefone: (11) 7718-6247</p>
            <p>Email: atendimento.capao@vivazen.com</p>
        </div>
    </div>
    <span>Todos os direitos reservados de Vivazen ©</span>
</footer>

<script>
    function toggleMenu(button) {
        const nav = document.querySelector(".mobile-nav");
        button.classList.toggle("opened");
        nav.classList.toggle("active");
        button.setAttribute(
            "aria-expanded",
            button.classList.contains("opened")
        );
    }
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
</script>

</body>

</html>