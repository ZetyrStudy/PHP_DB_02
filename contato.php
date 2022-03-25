<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça contato</title>
</head>

<body>

    <form action="envia.php" method="post">

        <h2>Faça contato</h2>
        <p>Preencha todos os campos abaixo para entrar em contato conosco.</p>

        <p>
            <label for="nome">Seu nome:</label>
            <input type="text" name="nome" id="nome" required minlength="3">
        </p>

        <p>
            <label for="email">Seu e-mail:</label>
            <input type="email" name="email" id="email" required>
        </p>

        <p>
            <label for="assunto">Assunto do contato:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5"></textarea>
        </p>

        <p>
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </p>

    </form>

</body>

</html>