<?php

// 1) Faz conexão com banco de dados e configurações
require('conn.php');

// 2) Query de update
//$sql = "DELETE FROM usuarios WHERE id = 2;";

$sql = "UPDATE  usuarios SET status = 'apagado' WHERE id = 2;";

$conn->query($sql);