<?php

$my_var = 'Joca';

switch ($my_var) {

    case 'Maria':
        echo 'O valor é Maria.';
        break;

    case 'João':
        echo 'O valor é João. ';
        echo 'Isso também é com o João.';
        break;

    case 'Joca':
        echo 'O valor é Joca.';
        break;

    default:
        echo 'Não sei quem é.';
        break;
}
// Caso seja 'break'

?>

<br>

<?php

$num = '20';

switch ($num):
    case 10:
        echo 'O valor é 10';
        break;
    case 20:
        echo 'O valor é 20';
endswitch;
