<?php
require_once __DIR__ . "/./Product.php";
require_once __DIR__ . "/../Traits/Traits.php";

class DogHouse extends Product
{
    public string $material;

    use quantity;

    public function __construct(string $material, string $img, int $price, int $productQuantity, Category $category)
    {
        parent::__construct('Cuccia', $img, $price, $category);
        $this->material = $material;
        $this->productQuantity = $productQuantity;
    }
}