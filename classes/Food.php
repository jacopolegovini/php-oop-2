<?php
require_once __DIR__ . "/./Product.php";
require_once __DIR__ . "/../Traits/Traits.php";

class Food extends Product
{
    public string $animalWeight;

    use quantity;

    public function __construct(string $animalWeight, string $img, int $price, int $productQuantity, Category $category)
    {
        parent::__construct('Cibo', $img, $price, $category);
        $this->animalWeight = $animalWeight;
        $this->productQuantity = $productQuantity;
    }
}