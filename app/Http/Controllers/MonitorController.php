<?php

namespace App\Http\Controllers;

use App\Services\OpenSearchService;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    public function __construct(
        protected OpenSearchService $openSearchService
    ) {}

    public function index()
    {
        return $this->openSearchService->health();
    }
}
