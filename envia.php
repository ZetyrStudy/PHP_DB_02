<?php

// Insere a conexãao com o banco de dados
require('conn.php');

// Variável que contém mensgens de erro
$erro = [];

// Variável com feedback
$feedback = '';

// Recebe e sanitiza campos do formulário
$nome = trim(htmlspecialchars($_POST['nome']));
$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
$assunto = trim(htmlspecialchars($_POST['assunto']));
$mensagem = trim(htmlspecialchars($_POST['mensagem']));

// Valida $nome
if (strlen($nome) < 3) $erro['nome'] = 'O campo nome deve ser preenchido.';

// Valida $email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erro['email'] = 'O endereço de e-mail está inválido.';

// Valida assunto
if (strlen($assunto) < 5) $erro['assunto'] = 'O campo assunto está muito curto.';

// Valida mensagem
if (strlen($mensagem) < 5) $erro['mensagem'] = 'O campo mensagem está muito curta.';

// Se não ocorreram erros...
if (count($erro) == 0) :

    // SQL que grva os dados
    $sql = <<<SQL

INSERT INTO contatos (
    nome,
    email,
    assunto,
    mensagem
) VALUES (
    '{$nome}',
    '{$email}',
    '{$assunto}',
    '{$mensagem}'
);   

SQL;

    // Executa a query
    $conn->query($sql);

    // Pega somente o primeiro nome do remetente para exibir o feedback
    $primeiro_nome = explode(' ', $nome)[0];

    // Gera feedback
    $feedback = <<<HTML

    <p>Olá {$primeiro_nome}!</p>
    <blockquote>Seu contato foi enviado com sucesso.</blockquote>
    <p>Obrigado...</p>

HTML;

// Se ocorreram erros...
else :

    $feedback = <<<HTML
    
<h3>Ooooops!</h3>
<p>Algo errado não deu certo:</p>
<ul>

HTML;

    // Loop que itera cada mensagem de erro
    foreach ($erro as $msg_erro) :

        $feedback .= "<li>{$msg_erro}</li>\n";

    endforeach;

    $feedback .= <<<HTML
    
</ul>

<p>Conserte os erros e envie novamente.</p>

<button type="button" onclick="history.go(-1)">&larr; Voltar</button>

HTML;

endif;

/*
// Debug das variáveis
echo '<pre>';
print_r($sql);
print_r(count($erro));
print_r($_POST);
print_r($erro);
echo '</pre>';
*/

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça contato - Enviando contato</title>
</head>

<body>

    <div class="contatos">

        <h2>Faça contato</h2>

        <?= $feedback ?>

    </div>

</body>

</html>