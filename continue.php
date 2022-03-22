<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 6) {
        continue;
    }
    echo "O número é: $x <br>";
}

echo '<hr>';

$x = 0;
while($x < 10) {
  echo "The number is: $x <br>";
  $x++;
}
