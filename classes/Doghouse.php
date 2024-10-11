<?php
require_once __DIR__ . "/./Product.php";

class DogHouse extends Product
{
    public string $material;

    public function __construct(string $material, string $img, int $price, Category $category)
    {
        parent::__construct('Cuccia', $img, $price, $category);
        $this->material = $material;
    }
}