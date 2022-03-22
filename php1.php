<?php

// Cria uma variável e atribui um valor a ela
$var = 'Biscoito';

/*
Testa o valor da viariável
e toma decisões com base neste.
*/

if ($var == 'Bolacha') {
    $out = 'Prefiro bolacha';
} else {
    $out = 'Prefiro biscoito';
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revisão 1</title>
</head>

<body>

    <?php echo '<h1>Isso é PHP</h1>' ?>

    <?php echo $out ?>
    <br>
    <?= $out ?>

    <?= 10 ?>

    <br>
    <?php print($out);

    $corDaCasa = 'amarela';

    $cordacasa = 'vermelha';

    echo $cordacasa;

    ?>
    <br>
    <?php



    $test = 10;

    echo $test;

    ?>

    <br>

    <?php

    $test = 'Joca';

    echo $test;
    ?>

    <br>

    <?php

    if ('10' == 10)
        echo 'São iguais.';
    else
        echo 'São diferentes.';

    if ('10' === 10)
        echo 'São iguais.';
    else
        echo 'São diferentes.';

    ?>
</body>

</html>