<?php

namespace App\Http\Resources\Shop_Categories_Product_Categories;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopCategoryProductCategoryIndexResource extends JsonResource
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
            'shop_product_id' => $this->shop_product_id,
            'comment' => $this->comment,
            'is_accepted' => $this->is_accepted,
        ];
    }
}