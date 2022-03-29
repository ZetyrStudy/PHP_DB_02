<?php

// Se o usuário chegou por um formulário...
if ($_SERVER["REQUEST_METHOD"] == "POST") :

    /*************************
     * Processa o formulário *
     *************************/

    // Incializa o aplicativo e conecta com o banco de dados
    require('conn.php');

    // Cria as variáveis dos campos
    $nome = $email = $senha1 = $senha2 = '';

    // Mensagens para o usuário
    $feedback = '';

    // Recebe e sanitiza cada campo
    $nome = trim(htmlspecialchars($_POST['nome']));
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $senha1 = trim(htmlspecialchars($_POST['senha1']));
    $senha2 = trim(htmlspecialchars($_POST['senha2']));

    // Todos os campos estão preenchidos?
    if (
        $nome === '' or
        $email === '' or
        $senha1 === '' or
        $senha2 === ''
    ) :

        // Em caso de erro:
        $feedback = <<<HTML
        
<h3>Ooooops!</h3>
<blockquote>Preencha todos os campos do formulário.</blockquote>
<p><button type="button" onclick="history.go(-1)">&larr; Voltar</button></p>

HTML;

    // As senhas coincidem?
    elseif ($senha1 !== $senha2) :

        // Em caso de erro
        $feedback = <<<HTML
     
<h3>Ooooops!</h3>
<blockquote>A senha e a repetição não coincidem.</blockquote>
<p><button type="button" onclick="history.go(-1)">&larr; Voltar</button></p>     

HTML;

    // Se não ocorreram erros...
    else :

        // Gera o SQL para salvar no banco de dados
        $sql = <<<SQL

INSERT INTO usuarios (
    nome,
    email,
    senha
) VALUES (
    '{$nome}',
    '{$email}',
    SHA1('{$senha1}')
);

SQL;

        // Executa a query
        $conn->query($sql);

        // Primeiro nome do usuário
        $primeiro_nome = explode(' ', $nome)[0];

        // Feedback ao usuário
        $feedback = <<<HTML

<h3>Olá {$primeiro_nome}!</h3>
<blockquote>Seu cadastro foi realizado com sucesso!</blockquote>
<p>Clique no botão abaixo para logar-se:</p>
<p><button type="button" onclick="location.href='login.php'">Login</button></p>

HTML;

    endif;

// Se o usuário tentou acessar diretamente...
else :

    // Mostra a página de cadastro
    header('Location: cadastro.php');

endif; // if ($_SERVER["REQUEST_METHOD"] == "POST")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestão de usuários - Cadastro</title>
</head>

<body>

    <div class="bloco">
        <div class="caixa">
            <?php echo $feedback; ?>
        </div>
    </div>

</body>

</html>