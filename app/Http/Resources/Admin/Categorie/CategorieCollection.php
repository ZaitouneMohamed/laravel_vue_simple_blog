<?php

namespace App\Http\Resources\Admin\Categorie;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CategorieCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($contact) {
                return [
                    'id' => $contact->id,
                    'name' => $contact->name,
                ];
            }),
        ];
    }
}
