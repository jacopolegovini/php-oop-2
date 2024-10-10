<?php
require_once __DIR__ . "/./Product.php";

class Toy extends Product
{
    public string $typeOfToy;

    public function __construct(string $typeOfToy, string $img, int $price, Category $category)
    {
        parent::__construct('Cibo', $img, $price, $category);
        $this->typeOfToy = $typeOfToy;
    }
}
