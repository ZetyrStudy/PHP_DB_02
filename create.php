<?php

// Faz conexão com banco de dados e configurações
require('conn.php');

// Dados para inserção. Ex.: vindos de um formulário.
$nome = 'Jonathan de Souza';
$email = 'jonasouza@gmail.com';
$senha = '123';

    // Escrever a query
    $sql = <<<SQL

INSERT INTO usuarios ( nome, email, senha ) VALUES 
(
    '{$nome}',
    '{$email}',
    SHA1('{$senha}')
);

SQL;

// Executar a query
$conn->query($sql);

echo "{$nome} adicionado com sucesso!";
