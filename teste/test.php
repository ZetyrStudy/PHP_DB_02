<?php
$pid = $_POST['product'];

if (isset($_POST['product']) && !empty($_POST['product'])) {
    $newdata = array($pid, 1 );
    array_push($_POST['product'], $newdata);
    print_r($pid);
    print_r($cart);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>

<body>

    <form action="test.php" method="post">
        <input type="submit" name="product" id="1" value=camisa>
        <input type="submit" name="product" id="2" value=short>
    </form>
</body>

</html>