<?php

declare(strict_types=1);

namespace App\Task2;

class Book
{
    private string $title;
    private int $price;
    private int $pagesNumber;

    /**
     * Book constructor.
     *
     * @param string $title
     * @param int    $price
     * @param int    $pagesNumber
     */
    public function __construct(string $title, int $price, int $pagesNumber)
    {
        $this->title       = $title;
        $this->price       = $price;
        $this->pagesNumber = $pagesNumber;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getPagesNumber(): int
    {
        return $this->pagesNumber;
    }
}