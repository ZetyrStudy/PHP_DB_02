<?php

// Apagar os cookies
$tempocookie = -1;
setcookie('usuario_nome', '', $tempocookie, '/');
setcookie('usuario_id', '', $tempocookie, '/');
setcookie('usuario_email', '', $tempocookie, '/');
setcookie('usuario_acesso', '', $tempocookie, '/');

// Redireciona para a index.php
header('Location: index.php');
