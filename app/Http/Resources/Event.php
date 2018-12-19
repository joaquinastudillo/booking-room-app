<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Event extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $startDate =  explode(' ',$this->start_date, 2);
        $endDate =  explode(' ',$this->end_date, 2);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'room' => $this->room,
            'start_date' => $startDate[0],
            'start_time' => $startDate[1],
            'end_date' => $endDate[0],
            'end_time' => $endDate[1],
            'user_id' => $this->user_id
        ];
    }
}
