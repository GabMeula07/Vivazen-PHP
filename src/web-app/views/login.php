<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-app/assets/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="register-container fade-element">
        <h2>Login</h2>
        <div id="message" style="margin-bottom: 16px; text-align:center;"></div>
        <form id="loginForm">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
        <div style="text-align:center; margin-top:16px;">
            <a href="/web-app/register/">Não tem conta? Cadastre-se</a>
        </div>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.fade-element').classList.add('visible');
        });

        document.getElementById('loginForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            const response = await fetch('/web-app/api/auth/', {
                method: 'POST',
                body: formData
            });

            const messageDiv = document.getElementById('message');
            try {
                const result = await response.json();
                if (response.ok) {
                    messageDiv.style.color = 'green';
                    messageDiv.textContent = result.message || 'Login realizado com sucesso!';
                    form.reset();
                    setTimeout(() => {
                        window.location.href = '/web-app/dashboard/';
                    }, 100);
                } else {
                    messageDiv.style.color = 'red';
                    messageDiv.textContent = result.message || 'Erro ao fazer login.';
                }
            } catch (err) {
                messageDiv.style.color = 'red';
                messageDiv.textContent = 'Erro inesperado ao processar resposta do servidor.';
            }
        });
    </script>
</body>

</html>