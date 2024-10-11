<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Landing Page</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link para o CSS -->
</head>
<body>
    <header>
        <nav>
            <h1>Nome da Sua Empresa</h1>
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#depoimentos">Depoimentos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Bem-vindo à Sua Landing Page!</h2>
        <p>Uma breve descrição ou slogan que capture a essência do seu negócio.</p>
        <a href="#contato" class="cta-button">Entre em Contato</a>
    </section>

    <section id="sobre">
        <h2>Sobre Nós</h2>
        <p>Conte um pouco sobre sua empresa, missão, visão e valores.</p>
    </section>

    <section id="servicos">
        <h2>Nossos Serviços</h2>
        <ul>
            <li>Serviço 1</li>
            <li>Serviço 2</li>
            <li>Serviço 3</li>
        </ul>
    </section>

    <section id="depoimentos">
        <h2>O que nossos clientes dizem</h2>
        <blockquote>
            <p>"Excelente serviço, super recomendo!"</p>
            <cite>- Cliente Satisfeito</cite>
        </blockquote>
    </section>

    <section id="contato">
        <h2>Entre em Contato</h2>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
