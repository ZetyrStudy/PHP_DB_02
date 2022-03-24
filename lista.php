<?php

// 1) Faz conexão com banco de dados e configurações
require('conn.php');

// 2) Escrever a query
$sql = <<<SQL

SELECT * FROM contatos;

SQL;

// Executar a query e retorna dados na variável
$res = $conn->query($sql);

echo <<<HTML

<table>
<tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Assunto</th>
    <th>Mensagem</th>
</tr>

HTML;

while ($user = $res->fetch_assoc()) :

    //Debug
    //print_r ($user);

    echo <<<HTML
    
<tr>
    <td>{$user['nome']}</td>
    <td>{$user['email']}</td>
    <td>{$user['assunto']}</td>
    <td>{$user['mensagem']}</td>
</tr>
    
HTML;

endwhile;

echo '</table>';
