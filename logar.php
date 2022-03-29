<?php

// Se o usuário chegou por um formulário...
if ($_SERVER["REQUEST_METHOD"] == "POST") :

    /*************************
     * Processa o formulário *
     *************************/

    // Incializa o aplicativo e conecta com o banco de dados
    require('conn.php');

    // Cria as variáveis dos campos
    $email = $senha = '';

    // Mensagens para o usuário
    $feedback = '';

    // Recebe e sanitiza cada campo
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $senha = trim(htmlspecialchars($_POST['senha']));
    $manter = (isset($_POST['manter'])) ? true : false;

    // Todos os campos estão preenchidos?
    if ($email === '' or $senha === '') :

        // Em caso de erro:
        $feedback = <<<HTML
        
<h3>Ooooops!</h3>
<blockquote>Preencha todos os campos do formulário.</blockquote>
<p><button type="button" onclick="history.go(-1)">&larr; Voltar</button></p>

HTML;

    else :

        // SQL de consulta ao usuário
        $sql  = <<<SQL

SELECT id, nome, email, acesso FROM usuarios
WHERE email = '{$email}'
AND senha = SHA1('{$senha}')
AND status = 'ativo';

SQL;

        // Executa o SQL e armazena os resultados em $res
        $res = $conn->query($sql);

        // Extrai os dados do usuário
        $usuario = $res->fetch_assoc();

        // Se o usuário quer manter o login
        if ($manter) {

            // Ajusta validade do cookie para 1 ano (365 dias)
            $tempocookie = time() + 86400 * 365;

            // Se não
        } else {

            // Ajusta o cookie para sessão
            $tempocookie = 0;
        }

        // Armazena os dados em cookies
        setcookie('usuario_nome', $usuario['nome'], $tempocookie, '/');
        setcookie('usuario_id', $usuario['id'], $tempocookie, '/');
        setcookie('usuario_email', $usuario['email'], $tempocookie, '/');
        setcookie('usuario_acesso', $usuario['acesso'], $tempocookie, '/');

        // SQL que atualiza último login
        $sql = <<<SQL

UPDATE usuarios 
SET ultimologin = NOW()
WHERE id = '{$usuario['id']}'
AND status = 'ativo';

SQL;

        // Executar a query
        $conn->query($sql);

        // Primeiro nome do usuário
        $primeiro_nome = explode(' ', $usuario['nome'])[0];

        // Feedback ao usuário
        $feedback = <<<HTML
        
        <h3>Olá {$primeiro_nome}!</h3>
        <blockquote>Você já pode usar as áreas exclusivas do site!</blockquote>
        <p><button type="button" onclick="location.href='index.php'">Página inicial</button></p>
        
HTML;

    endif;

// Se o usuário tentou acessar diretamente...
else :

    // Mostra a página de cadastro
    header('Location: login.php');

endif; // if ($_SERVER["REQUEST_METHOD"] == "POST")
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
        <?php echo $feedback ?>
    </div>
</div>

</body>
</html>