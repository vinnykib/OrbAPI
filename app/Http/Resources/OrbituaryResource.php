<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class OrbituaryResource extends Resource
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
        'date_of_burial' => $this->date_of_burial,
        'details' => $this->details,
        'photo' => $this->photo,
        'map_photo' => $this->map_photo,
        'euology_photo' => $this->euology_photo,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
      ];
    }
}
