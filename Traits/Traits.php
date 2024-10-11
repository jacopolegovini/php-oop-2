<?php

trait quantity
{
    public $productQuantity;

    public function __construct(string $productQuantity)
    {
        $this->productQuantity = $productQuantity;
    }
}