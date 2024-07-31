<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use App\Services\BookService;
use App\Services\OpenSearchService;
use Illuminate\Http\Request;
use OpenSearch\Client;
use OpenSearch\ClientBuilder;

class BookController extends Controller
{
    protected OpenSearchService $openSearchService;
    protected BookService $bookService;


    function __construct
    (
        OpenSearchService $openSearchService,
        BookService $bookService
    )
    {
        $this->openSearchService = $openSearchService;
        $this->bookService = $bookService;
    }



    public function index()
    {
        return BookResource::collection(Book::all());
    }

    public function store(CreateBookRequest $request)
    {
        $book = $this->bookService->createBook($request->validated());

        $this->openSearchService->indexDocument('books', [
            'id' => $book->id,
            'title' => $book->title,
            'author' => $book->author,
            'publication_date' => $book->publication_date,
        ]);

        return new BookResource($book);
    }
}
