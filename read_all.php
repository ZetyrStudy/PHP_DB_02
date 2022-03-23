<?php

// 1) Faz conexão com banco de dados e configurações
require('conn.php');

// 2) Escrever a query
$sql = <<<SQL

SELECT * FROM usuarios;

SQL;

// Executar a query e retorna dados na variável
$res = $conn->query($sql);

while ($user = $res->fetch_assoc()) :

    echo $user['nome'] . ' - ' . $user['email'] . '<br>';

endwhile;
