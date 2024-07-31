<?php

namespace App\Services;

use App\Repositories\BookMDBRepository;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BookMDBService
{
    public function __construct(
        protected BookMDBRepository $bookMongoRepository
    ) {}

    public function getAll()
    {
        return $this->bookMongoRepository->getAll();
    }

}
