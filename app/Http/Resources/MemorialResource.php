<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class MemorialResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'id' => $this->id,
        'name' => $this->name,
        'date_of_death' => $this->date_of_death,
        'details' => $this->details,
        'photo' => $this->photo,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
      ];
    }
}
