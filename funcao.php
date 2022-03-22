<?php

function mostra_data()
{
    return date('d/m/Y');
}

echo 'Hoje é ' . mostra_data();

echo '<hr>Joca faz aniversário em ' . mostra_data();

echo '<hr>';

function mostra_nome($nome = 'Anônimo')
{
    return $nome . ' da Silva';
}

echo mostra_nome('Setembrino');

echo '<hr>O nome da vendedora é ' . mostra_nome('Maria');

echo '<hr>';

$nomes = array('João', 'Daniel', 'Marcos', 'Juarez', 'Marcelo');

foreach ($nomes as $value) {
    echo 'Chamando ' . mostra_nome($value) . '.<br>';
}
