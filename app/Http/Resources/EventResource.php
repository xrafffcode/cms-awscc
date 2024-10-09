<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'thumbnail' => asset('storage/' . $this->thumbnail),
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'excerpt' => Str::limit($this->description, 200),
            'date' => $this->date,
            'url' => $this->url,
            'status' => $this->status
        ];
    }
}
