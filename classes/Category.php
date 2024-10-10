<?php

class Category
{
    public $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function pickCategory(): string
    {
        if ($this->title !== 'Cane' || $this->title !== 'Gatto') {
            return "Deve essere uguale a 'cane' o 'gatto'";
        }
    }
}
