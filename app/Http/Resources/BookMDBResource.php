<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookMDBResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "type" => "book",
            "attributes" => [
                'title' => $this->title,
                'author' => $this->author,
                'genre' => $this->genre,
                'description' => $this->description,
                'quantity' => $this->quantity,
                'price' => $this->price,
                'published_date' => $this->published_date,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]
        ];
    }
}
