<?php
require_once __DIR__ . "/./Product.php";
require_once __DIR__ . "/../Traits/Traits.php";

class Toy extends Product
{
    public string $typeOfToy;

    use quantity;

    public function __construct(string $typeOfToy, string $img, int $price, int $productQuantity, Category $category)
    {
        parent::__construct('Giocattolo', $img, $price, $category);
        $this->typeOfToy = $typeOfToy;
        $this->productQuantity = $productQuantity;
    }
}