<?php

namespace App\Services;

use App\Models\Book;

class BookService
{

    protected OpenSearchService $openSearchService;

    function __construct(OpenSearchService $openSearchService)
    {
        $this->openSearchService = $openSearchService;
    }

    public function createBook($data)
    {
        $newBook = Book::create($data);

        return $newBook;

    }
}
