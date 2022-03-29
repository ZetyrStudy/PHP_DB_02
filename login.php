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

        <form action="logar.php" method="post">

            <h2>Logue-se</h2>
            <p>Logue-se para ter acesso a um monte de coisas.</p>

            <table>

                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="email" name="email" id="email" value="joca@silva.com"></td>
                </tr>

                <tr>
                    <td><label for="senha">Senha:</label></td>
                    <td><input type="password" name="senha" id="senha" value="123"></td>
                </tr>

                <tr>
                <td>&nbsp;</td>
                <td><label><input type="checkbox" name="manter" id="manter" value="sim"> Mantenha-me logado.</label></td>
                </tr>

                <tr class="botoes">
                    <td>&nbsp;</td>
                    <td>
                        <button type="submit">Entrar</button>
                    </td>
                </tr>

                <tr class="botoes">
                    <td>&nbsp;</td>
                    <td>
                        <a href="lembrasenha.php">Esqueci minha senha.</a>
                    </td>
                </tr>

            </table>


        </form>

    </div>

</body>

</html>