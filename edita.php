<?php

require('conn.php');

// Obtém o ID
$id = intval($_GET['id']);

// Se o id é inválido, volta para a listagem
if($id < 1) header('Location: lista.php');

$sql = <<<SQL

SELECT * FROM contatos
WHERE id = '{$id}'
AND status != 'apagado'

SQL;


$res = $conn->query($sql);

// Conta quantos registros retornaram
$total = $res->num_rows;

// Se não recebeu nada, volta para a lista
if ($total != 1) header('Location: lista.php');

$contato = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        form p:last-child {
            display: flex;
            justify-content: space-around;
        }

        button[type="reset"] {
            margin: 0;
        }
    </style>
    <title>Faça contato</title>
</head>

<body>

    <form action="atualiza.php?id=<?= $id ?>" method="post">

        <h2>Edita contato</h2>

        <p>Preencha todos os campos abaixo para entrar em contato conosco.</p>

        <p>
            <label for="nome">Seu nome:</label>
            <input type="text" name="nome" id="nome" required minlength="3" value="<?= $contato['nome'] ?>">
        </p>

        <p>
            <label for="email">Seu e-mail:</label>
            <input type="email" name="email" id="email" required value="<?= $contato['email'] ?>">
        </p>

        <p>
            <label for="assunto">Assunto do contato:</label>
            <input type="text" name="assunto" id="assunto" required minlength="5" value="<?= $contato['assunto'] ?>">
        </p>

        <p>
            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required minlength="5"><?= $contato['mensagem'] ?></textarea>
        </p>

        <p>
            <button type="button" onclick="location.href='lista.php'">Voltar</button>
            <button type="reset">Reset</button>
            <button type="submit">Salvar</button>
        </p>

    </form>

</body>

</html>