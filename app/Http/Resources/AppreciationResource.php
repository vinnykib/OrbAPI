<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class AppreciationResource extends Resource
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
        'details' => $this->details,
        'photo' => $this->photo,
        'created_at' => (string) $this->created_at,
        'updated_at' => (string) $this->updated_at,
      ];
    }
}
