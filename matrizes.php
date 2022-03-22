<?php

// Array tipo 'matriz'
$teste[0] = 'Casa';
$teste[1] = 'Apartamento';
$teste[2] = 'Barraca';
$teste[3] = 'Choupana';

foreach ($teste as $value) {
    echo "$value <br>";
}

echo '<hr>';

for ($i = 0; $i <= 3; $i++) {
    echo "{$teste[$i]} <br>";
}

echo '<hr>';

$index = 0;
while($index <= 3) {
    echo "{$teste[$index]} <br>";
    $index++;
}

echo '<hr>';

for ($i = 0; $i < count($teste); $i++) {
    echo "{$teste[$i]} <br>";
}

echo '<hr>';

// Array tipo 'vetor'
$cars['fiat'] = 'Uno';
$cars['ford'] = 'Maveric';
$cars['vw'] = 'Fusca';

foreach ($cars as $ind => $val) {
    echo "$ind = $val<br>";
}
