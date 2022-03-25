<?php

// Faz conexão com banco de dados e configurações
require('conn.php');

// Obtém o ID
$id = intval($_GET['id']);

// Se o id é inválido, volta para a listagem
if($id < 1) header('Location: lista.php');

// Query para obter o contato completo
$sql = <<<SQL

SELECT * FROM contatos
WHERE id = '{$id}'
AND status != 'apagado';

SQL;

// Executa a query e armazena os resultados
$res = $conn->query($sql);

// Conta quantos registros retornaram
$total = $res->num_rows;

// Se não recebeu nada, volta para a lista
if ($total != 1) header('Location: lista.php');

// Obtém dados na forma de array
$contato = $res->fetch_assoc();

// Query que atualia o status para 'lido'
$sql = <<<SQL

UPDATE contatos SET status = 'lido'
WHERE id = '{$id}'
AND status != 'apagado';

SQL;

// Executa a query
$conn->query($sql);

// Formata saída para o HTML
$out = <<<HTML

<h2>{$contato['nome']}</h2>
<ul>
    <li><strong>ID: </strong> {$contato['id']}</li>
    <li><strong>Data: </strong> {$contato['data']}</li>
    <li><strong>Nome: </strong> {$contato['nome']}</li>
    <li><strong>E-mail: </strong> {$contato['email']}</li>
    <li><strong>Assunto: </strong> {$contato['assunto']}</li>
</ul>
<pre>{$contato['mensagem']}</pre>

<div>
    <button onclick="location.href='/lista.php'">Voltar</button>
    <button onclick="location.href='/edita.php?id={$contato['id']}'">Editar</button>
    <button onclick="if(confirm('Tem certeza que deseja apagar este contato?')) location.href='/apaga.php?id={$contato['id']}'; else return false;">Apagar</button>
</div>

HTML;

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça contato - Ler contato</title>
</head>

<body>

    <div class="contatos">

        <?= $out ?>

    </div>

</body>

</html>