<?php

// Testa se usuário está logado
if (isset($_COOKIE['usuario_nome'])) {
    $nome = $_COOKIE['usuario_nome'];
    $logado = true;
} else {
    $nome = 'Anônimo';
    $logado = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestão de usuários - Login</title>
</head>

<body>

    <div class="bloco">
        <div class="caixa">
            <h3>Olá <?php echo $nome ?>!</h3>
            <table class="index">

                <?php

                // Se usuário está logado, exiber o HTML abaixo
                if ($logado) :
                ?>
                    <tr>
                        <td><button type="button" onclick="location.href='perfil.php'">Ver meu perfil</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" onclick="if(confirm('Tem certeza que deseja sair?')) { location.href='logout.php'; }">Sair / Logout</button></td>
                    </tr>
                <?php

                // Se não está logado, exibe o HTML abaixo
                else :
                ?>

                    <tr>
                        <td><button type="button" onclick="location.href='cadastro.php'">Cadastre-se</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" onclick="location.href='login.php'">Entrar / Login</button></td>
                    </tr>

                <?php endif; ?>

            </table>
        </div>
    </div>

</body>

</html>