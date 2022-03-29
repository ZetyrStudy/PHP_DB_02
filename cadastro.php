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

        <form action="cadastra.php" method="post">

            <h2>Cadastre-se</h2>
            <p>Cadastre-se para ter acesso a um monte de coisas.</p>

            <table>

                <tr>
                    <td><label for="nome">Nome:</label></td>
                    <td><input type="text" name="nome" id="nome" value="Joca da Silva"></td>
                </tr>

                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="email" name="email" id="email" value="joca@silva.com"></td>
                </tr>

                <tr>
                    <td><label for="senha1">Senha:</label></td>
                    <td><input type="password" name="senha1" id="senha1" value="123"></td>
                </tr>

                <tr>
                    <td><label for="senha2">Repetição:</label></td>
                    <td><input type="password" name="senha2" id="senha2" value="123"></td>
                </tr>

                <tr class="botoes">
                    <td>&nbsp;</td>
                    <td>
                        <button type="submit">Cadastrar</button>
                        <button type="reset">Limpar</button>
                    </td>
                </tr>

                <tr>
                    <td class="cadastrado" colspan="2">
                        <button type="button" onclick="location.href='login.php'">Já tenho cadastro</button>
                    </td>
                </tr>

            </table>


        </form>

    </div>

</body>

</html>