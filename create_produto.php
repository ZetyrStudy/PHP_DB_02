<?php

// Faz conexão com banco de dados e configurações
require('conn.php');

// Dados para inserção. Ex.: vindos de um formulário.
$nome = 'Faca japonesa';
$preco = '15.22';
$embalagem = 'caixa';
$status = 'ativo';

    // Escrever a query
    $sql = <<<SQL

INSERT INTO produtos ( nome, preco, embalagem, status ) VALUES 
(
    '{$nome}',
    '{$preco}',
    '{$embalagem}',
    '{$status}',
);

SQL;

// Executar a query
$conn->query($sql);

echo "{$nome} adicionado com sucesso!";
