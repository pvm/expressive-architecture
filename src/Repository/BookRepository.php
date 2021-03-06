<?php
declare(strict_types=1);

namespace ThatBook\Repository;

use Symfony\Bridge\Doctrine\RegistryInterface;
use ThatBook\Entity\Book;

class BookRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Book::class);
    }
}
