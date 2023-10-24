<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            // 'title' => $this->title,
            // 'description' => $this->description,
            // 'author' => $this->author[0],
            // 'image' => $this->image,
            // 'pages' => $this->pages,
            // 'publication_date' => $this->publication_date,
            // 'price' => $this->price,
            // 'language' => $this->language,
            // 'format' => $this->format,
            // 'edition' => $this->edition,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
    }
}
