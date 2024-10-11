<?php
include_once __DIR__ . "/./db/data.php";

$product = new Product('prodotto', '...', 45, new Category('Cane'));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1>Prodotti per animali</h1>
            <div class="cards-container">
                <div class="cards-food">
                    <h2>Cibo</h2>
                    <div class="d-flex gap-3">
                        <?php foreach ($foods as $food) { ?>
                        <div class="card">
                            <img src="<?= $food->img ?>" alt="...">
                            <section>Tipologia di animale: <?= $food->category->title ?> </section>
                            <section>Peso: <?= $food->animalWeight ?></section>
                            <section>Prezzo: <?= $food->price ?>€</section>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="cards-toy mt-4">
                    <h2>Giocattoli</h2>
                    <div class="d-flex gap-3">
                        <?php foreach ($toys as $toy) { ?>
                        <div class="card">
                            <img src="<?= $toy->img ?>" alt="...">
                            <section>Tipologia di animale: <?= $toy->category->title ?> </section>
                            <section>Prezzo: <?= $toy->price ?>€</section>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="cards-doghouse mt-4">
                    <h2>Cucce</h2>
                    <div class="d-flex gap-3">
                        <?php foreach ($doghouses as $doghouse) { ?>
                        <div class="card">
                            <img src="<?= $doghouse->img ?>" alt="...">
                            <section>Tipologia di animale: <?= $doghouse->category->title ?> </section>
                            <section>Prezzo: <?= $doghouse->price ?>€</section>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>