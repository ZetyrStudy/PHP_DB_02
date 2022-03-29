<?php

// Incializa o aplicativo e conecta com o banco de dados
require('conn.php');

// Ler o ID do cookie
$id = $_COOKIE['usuario_id'];

// SQL para obter os dados
$sql = <<<SQL

SELECT * FROM usuarios
WHERE id = '{$id}'
AND status = 'ativo'

SQL;

// Executa a query e armazena em '$res'
$res = $conn->query($sql);

// Recuperar os dados
$usuario = $res->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestão de usuários - Perfil</title>
</head>

<body>

    <div class="bloco">
        <div class="caixa">

            <h2>Perfil do <?php echo $usuario['nome'] ?></h2>
            <p>Você pode alterar alguns dados do cadastro e clicar no botão [Salva].</p>
            <?php

            // Temporariamente, exibe dados do usuário
            echo '<pre>';
            print_r($usuario);
            echo '</pre>';
            ?>

        </div>
    </div>

</body>

</html>