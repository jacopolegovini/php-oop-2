<?php
include_once __DIR__ . "/./Category.php";

class Product
{
    public string $name;
    public string $img;
    public int $price;
    public Category $category;

    public function __construct(string $name, string $img, int $price, Category $category)
    {
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->category = $category;
    }
}