<?php
include_once __DIR__ . "/./classes/Product.php";

$product = new Product('prodotto', '...', 45, new Category('Cane'));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Prodotti per animali</h1>
        <?php var_dump($product) ?>
    </main>
</body>

</html>