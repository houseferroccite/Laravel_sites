<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChatResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'manager_id' => $this->manager_id,
            'customer_id' => $this->customer_id,
            'b24_id' => $this->b24_id,
            'b24_type' => $this->b24_type
        ];
    }
}
