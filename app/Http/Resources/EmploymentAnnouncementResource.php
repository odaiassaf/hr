<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\DepartmentsResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EmploymentAnnouncementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'position_title' => $this->position_title,
            'body' => $this->body,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'publish_date' =>$this->publish_date,
            'years_of_experience' =>$this->years_of_experience,
            'image_url' =>$this->image_url,
            'country'=>$this->country,
            'department' => $this->department->title,
            'department_id'=>$this->department_id,
            'city'=>$this->city,
            'type'=>$this->type,
        ];
    }
}
