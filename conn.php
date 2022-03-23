<?php

// 1) PHP em UTF-8 - Primeiro código PHP
header("Content-type: text/html; charset=utf-8");

// 2) Conexão com o banco de dados

// Variáveis de conexão
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'review';

// Conexão
$conn = new mysqli($servidor, $usuario, $senha, $banco);

// 3) Forçar todas as transações entre PHP e MySQL para UTF-8
$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

// 4) Forçar nomes em datas para pt-BR (dias da semana e meses)
$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');
