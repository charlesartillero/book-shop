<?php

namespace App\Repositories;

use App\Contracts\BookMDBInterface;
use App\Http\Resources\BookMDBResource;
use App\Models\BookMDB;

class BookMDBRepository implements BookMDBInterface
{
    public function getAll()
    {
        $books = BookMDB::latest()->paginate();

        return BookMDBResource::collection($books);
    }
}
