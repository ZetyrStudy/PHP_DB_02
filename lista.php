<?php

// 1) Faz conexão com banco de dados e configurações
require('conn.php');

// 2) Escrever a query
$sql = <<<SQL

SELECT * FROM contatos
WHERE status != 'apagado';

SQL;

// Executar a query e retorna dados na variável
$res = $conn->query($sql);

// Inicia o cabeçalho da tabela
$out = <<<HTML

<table class="contatos">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Assunto</th>
    <th>Status</th>
    <th>Opções</th>
</tr>

HTML;

// Monta a tabela com todos os contatos
while ($user = $res->fetch_assoc()) :

    $out .= <<<HTML
    
<tr>
    <td>{$user['id']}</td>
    <td>{$user['nome']}</td>
    <td>{$user['email']}</td>
    <td>{$user['assunto']}</td>
    <td>{$user['status']}</td>
    <td class="opcoes">
        <button onclick="location.href='/ler.php?id={$user['id']}'">Ler</button>
        <button onclick="location.href='/edita.php?id={$user['id']}'">Editar</button>
        <button onclick="if(confirm('Tem certeza que deseja apagar este contato?')) location.href='/apaga.php?id={$user['id']}'; else return false;">Apagar</button>
    </td>
</tr>
    
HTML;

endwhile;

// Finaliza a tabela
$out .= '</table>';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faça Contato - Todos os contatos</title>
</head>

<body>

    <div class="contatos">

        <h2>Faça contato</h2>
        <p>Todos os contatos (somente para o ADM).</p>

        <?= $out ?>

    </div>

</body>

</html>