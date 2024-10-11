<?php

trait quantity
{
    public $productQuantity;

    public function __construct(string $productQuantity)
    {
        $this->productQuantity = $productQuantity;
    }

    public function isInStock()
    {
        if ($this->productQuantity > 0) return true;
        return throw new Exception("Quantità insufficiente");
    }
}