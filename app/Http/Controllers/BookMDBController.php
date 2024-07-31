<?php

namespace App\Http\Controllers;

use App\Http\Resources\BookMDBResource;
use App\Models\BookMDB;
use App\Services\BookMDBService;
use Illuminate\Http\Request;

class BookMDBController extends Controller
{
    public function __construct(
        private BookMDBService $bookMongoService
    ){}

    public function index()
    {
        return $this->bookMongoService->getAll();
    }

    public function store(Request $request)
    {
        return BookMDB::create([$request->all()]);
    }
}
