<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/web-app/assets/css/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="register-container fade-element">
        <h2>Cadastro de Usuário</h2>
        <div id="message" style="margin-bottom: 16px; text-align:center;"></div>
        <form id="registerForm">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" required>

            <label for="last_name">Sobrenome</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" maxlength="14" placeholder="000.000.000-00" required>

            <label for="birth_date">Data de Nascimento</label>
            <input type="date" id="birth_date" name="birth_date" required>


            <label for="plan">Plano</label>
            <select id="plan" name="plus" required>
                <option value="0" selected>Pro</option>
                <option value="1">Plus</option>
            </select>

            <button type="submit">Registrar</button>
        </form>
    </div>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            document.querySelector('.fade-element').classList.add('visible');
        });

        document.getElementById('registerForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            console.log([...formData.entries()])

            const response = await fetch('/web-app/api/user/', {
                method: 'POST',
                body: formData
            });

            const messageDiv = document.getElementById('message');
            try {
                const result = await response.json();
                if (response.ok) {
                    messageDiv.style.color = 'green';
                    messageDiv.textContent = result.message || 'Usuário cadastrado com sucesso!';
                    form.reset();
                    setTimeout(() => {
                        window.location.href = '/web-app/login'; // ajuste o caminho conforme sua rota de login
                    }, 1500);
                } else {
                    messageDiv.style.color = 'red';
                    messageDiv.textContent = result.message || 'Erro ao cadastrar usuário.';
                }
            } catch (err) {
                messageDiv.style.color = 'red';
                messageDiv.textContent = 'Erro inesperado ao processar resposta do servidor.';
            }
        });
    </script>
</body>

</html>