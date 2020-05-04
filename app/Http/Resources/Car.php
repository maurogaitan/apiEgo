<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
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
            'id'        => $this->id,
            'name'      => $this->name,
            'year'      => $this->year,
            'price'     => $this->price,
            'type'      => $this->type,
            'image'     => 'https://res.cloudinary.com/dazwqoxcx/image/upload/v1588335112/api-ego/'.$this->image.'.png',
            'image_2x'  => 'https://res.cloudinary.com/dazwqoxcx/image/upload/v1588335112/api-ego/'.$this->image_2x.'.png',
            'image_3x'  => 'https://res.cloudinary.com/dazwqoxcx/image/upload/v1588335112/api-ego/'.$this->image_3x.'.png',
            'url'       =>    route('cars.show',$this->id),
            'title' => $this->title,
            'description' => $this->description,
            'title_2'    => $this->title_2,
            'title_3'    => $this->title_3,
            'description_2'    => $this->description_2,
            'description_3'    => $this->description_3,

        ];
    }
}
