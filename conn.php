<?php

/**
 * Passo 1) PHP em UTF-8
 * Essa deve ser SEMPRE a primeira linha de código PHP.
 */
header("Content-type: text/html; charset=utf-8");

/**
 * Passo 2) Variáveis de conexão
 * Os dados destas variáveis devem ser obtidos com o provedor de hospedagem.
 * Os dados abaixo representam uma conexão usando o provedor XAMPP.
 */
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sitephp';

/**
 * Passo 3) Conexão com o MySQL usando a biblioteca 'mysqli' do PHP.
 * Esa biblioteca já vem instalada, por padrão, no PHP.
 */
$conn = new mysqli($servidor, $usuario, $senha, $banco);

/**
 * Passo 4) Forçar todas as transações entre PHP e MySQL para UTF-8
 * Fazemos isso para evitar erros de acentuação quando lemos ou gravamos dados no MySQL.
 */
$conn->query("SET NAMES 'utf8'");
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_results=utf8');

/**
 * Passo 5) Forçar nomes em datas para pt-BR (dias da semana e meses)
 * Isso é útil para sites em português. Para outros idiomas, troque a sigla do idioma.
 */
$conn->query('SET GLOBAL lc_time_names = pt_BR');
$conn->query('SET lc_time_names = pt_BR');
