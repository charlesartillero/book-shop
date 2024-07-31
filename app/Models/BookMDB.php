<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;


class BookMDB extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'books';

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'quantity',
        'price',
        'published_date',
    ];
}
