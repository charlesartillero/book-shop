<?php

namespace App\Services;

use App\Models\Book;
use App\Models\BookMDB;

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

    public function getAll()
    {
        return BookMDB::all();
    }

}
