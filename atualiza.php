<?php

require('conn.php');

// Obtém o ID
$id = intval($_GET['id']);

// Se o id é inválido, volta para a listagem
if($id < 1) header('Location: lista.php');

// Recebe e sanitiza campos do formulário
$nome = trim(htmlspecialchars($_POST['nome']));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$assunto = trim(htmlspecialchars($_POST['assunto']));
$mensagem = trim(htmlspecialchars($_POST['mensagem']));

$sql = <<<SQL

UPDATE contatos SET 
    nome = '{$nome}',
    email = '{$email}',
    assunto = '{$assunto}',
    mensagem = '{$mensagem}'
WHERE id = '{$id}'
AND status != 'apagado'

SQL;

$conn->query($sql);

// Gera feedback
$feedback = <<<HTML

<p>Contato foi atualizado com sucesso.</blockquote>
<p>Obrigado...</p>
<button type="button" onclick="location.href='lista.php'">Voltar</button>

HTML;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça contato - Editando contato</title>
</head>

<body>

    <div class="contatos">

        <h2>Faça contato</h2>

        <?= $feedback ?>

    </div>

</body>

</html>
