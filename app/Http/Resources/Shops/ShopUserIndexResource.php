<?php

namespace App\Http\Resources\Shops;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopUserIndexResource extends JsonResource
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
            'name'=>$this->name,
            'image'=>$this->image,
            'manager_name'=>$this->manager_name,
            'is_active'=>$this->is_active,
            'is_close'=>$this->is_close,

        ];
    }
}
