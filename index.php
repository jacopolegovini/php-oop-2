<?php
include_once __DIR__ . "/./db/data.php";
include_once __DIR__ . "/./functions/functions.php";

// if (isset($_GET["quantity"])) {
//     $quantity = $_GET["quantity"];
//     if ($quantity <= $food->productQuantity) {
//         echo 'test riuscito';
//     };
// }

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
                        <div class="card 
                            <?php ($food->isInStock()) ? getAvailableClass() : getNotAvailableClass() ?>">
                            <img src="<?= $food->img ?>" alt="...">
                            <section>Tipologia di animale: <?= $food->category->title ?> </section>
                            <section>Peso: <?= $food->animalWeight ?></section>
                            <section>Prezzo: <?= $food->price ?>€</section>
                            <section>
                                <?php
                                    if ($food->isInStock()) { ?>
                                <p>Disponibile</p>
                                <?php } else { ?>
                                <p>Non disponibile</p>
                                <?php } ?>
                            </section>
                            <?php if ($food->isInStock()) { ?>
                            <form action="" method="GET">
                                <select name="quantity" id="quantity">
                                    <?php for ($i = 0; $i < $food->productQuantity; $i++) { ?>
                                    <option value="<?= $i + 1; ?>"><?php echo $i + 1; ?></option>
                                    <?php } ?>
                                </select>
                                <button class="btn btn-primary">Acquista</button>
                            </form>
                            <?php } else { ?>
                            <button class="btn btn-secondary">Non acquistabile</button>
                            <?php } ?>
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
                            <section>
                                <?php try {
                                        if ($toy->isInStock()) { ?>
                                <p>Disponibile</p>
                                <?php }
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    ?>
                            </section>
                            <button class="btn btn-primary">Acquista</button>

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
                            <section>
                                <?php try {
                                        if ($doghouse->isInStock()) { ?>
                                <p>Disponibile</p>
                                <?php }
                                    } catch (Exception $e) {
                                        echo $e->getMessage();
                                    }
                                    ?>
                            </section>
                            <button class="btn btn-primary">Acquista</button>

                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>

</html>