<?php

declare(strict_types = 1);

namespace App\Task2;

use Generator;

class BooksGenerator
{
    private int   $minPagesNumber;
    private array $libraryBooks;
    private int   $maxPrice;
    private array $storeBooks;

    /**
     * BooksGenerator constructor.
     *
     * @param int   $minPagesNumber
     * @param array $libraryBooks
     * @param int   $maxPrice
     * @param array $storeBooks
     */
    public function __construct(
        int $minPagesNumber,
        array $libraryBooks,
        int $maxPrice,
        array $storeBooks
    ) {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks   = $libraryBooks;
        $this->maxPrice       = $maxPrice;
        $this->storeBooks     = $storeBooks;
    }

    /**
     * @return Generator
     */
    public function generate(): Generator
    {
        /** @var Book $libraryBook */
        foreach ($this->libraryBooks as $libraryBook) {
            if ($libraryBook->getPagesNumber() >= $this->minPagesNumber) {
                yield $libraryBook;
            }
        }

        /** @var Book $storeBook */
        foreach ($this->storeBooks as $storeBook) {
            if ($storeBook->getPrice() <= $this->maxPrice) {
                yield $storeBook;
            }
        }
    }
}