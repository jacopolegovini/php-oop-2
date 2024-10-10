<?php
require_once __DIR__ . "/./Product.php";

class Food extends Product
{
    public string $animalWeight;

    public function __construct(string $animalWeight, string $img, int $price, Category $category)
    {
        parent::__construct('Cibo', $img, $price, $category);
        $this->animalWeight = $animalWeight;
    }
}
